<?php
use App\liveaboard;
use App\liveaboard_itinerary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
});

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


Route::group(['prefix' => 'liveaboard'], function () {
    //Main Route
    Route::get('/', function () {
        $liveaboards = App\liveaboard::all();
        return view('liveaboard.admin.all-liveaboard', compact('liveaboards'));
    });
    
    //Liveaboard Add Routes
    Route::get('add', 'LiveaboardController@create');
    Route::post('add/post', 'LiveaboardController@store');
    
    //Liveaboard Edit and Delete Routes
    Route::get('edit/{liveaboard}', 'LiveaboardController@edit');
    Route::post('edit/{liveaboard}', 'LiveaboardController@update');
    Route::get('edit/{liveaboard}/image/delete/{id}', 'LiveaboardController@deleteImage');
    Route::get('edit/{liveaboard}/image/main/{id}', function($liveaboard, $id) {
        $live = App\liveaboard::where('slug', $liveaboard)->first();
        $old_photos = App\liveaboard_photo::where('liveaboard_id', $live->id)->get();
        foreach ($old_photos as $old_photo) {
            $old_photo->main = '0';
            $old_photo->save();
        }
        $photo = App\liveaboard_photo::find($id);
        $photo->main = '1';
        $photo->save();
        return redirect('admin/liveaboard/edit/'. $liveaboard .'/#image_preview_old')->withInput();
    });
    Route::get('delete/{liveaboard}', 'LiveaboardController@destroy');

    //Ititnerary Adding Routes
        Route::get('itinerary/{liveaboard}/add', function () {
            $gallery_images = \App\liveaboard_itinerary::all();
            $liveaboards = liveaboard::where('slug', $liveaboard)->get();        
            return view('liveaboard.admin.create-itinerary', compact('gallery_images', 'liveaboards'));
        });
        Route::post('itinerary/{liveaboard}/add', function (Request $request) {       
            foreach ($request->image as $photo) {
                $liveaboard_itinerary = liveaboard_itinerary::create(Input::except('_token', 'image'));
                //File names and location
                $fileName = 'gallery' . '-' . time() . '-' . $photo->getClientOriginalName();
                $location_o = 'gallery'.'/original'.'/'.$fileName;
                $location_t = 'gallery'.'/thumbnail'.'/'.$fileName;
                
                $s3 = \Storage::disk('public');
    
                //Original Image
                $original = Image::make($photo)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $s3->put($location_o, $original->stream()->__toString(), 'public');
                //Thumbnail image
                $thumbnail = Image::make($photo)->resize(null, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $s3->put($location_t, $thumbnail->stream()->__toString(), 'public');
    
                $liveaboard_itinerary->photo_url = $location_o;
                $liveaboard_itinerary->thumbnail = $location_t;
                $liveaboard_itinerary->save();
    
            }
            $url = 'admin/liveaboard/itinerary/' . $liveaboard_itinerary->liveaboard->slug;
            return redirect($url)->with('alert-success', 'Successfully added itenerary');
        }); 
        Route::get('itinerary/{id}/delete', function ($id) {
            $photo = \App\liveaboard_itinerary::find($id);
            if ($photo !== null) {
                $photo->delete();
                return redirect()->back()->with('alert-success', 'Successfully deleted the image');
            } else {
                return redirect('/price')->with('alert-danger', 'Image not found');
            }
            
        });
        Route::get('itinerary/{id}', function ($id) {
            $price = \App\liveaboard_itinerary::find($id);
    
            return $price;
        });
    
    
    Route::get('/image/{folder}/{type}/{filename}', function ($folder, $type, $filename) {
        $fileloc = 'app/public/'.$folder.'/'.$type.'/'.$filename;
        $path = storage_path($fileloc);
    
        $failed = "It failed";
        
        if (!File::exists($path)) {
          return $failed;
        }
    
        $file = File::get($path);
        $type = File::mimeType($path);
    
        /*$img = Image::cache(function($image) use ($file) {
            $image->make($file)->resize(null, 1080, function ($constraint) {
                $constraint->aspectRatio();
            });
        }, 100, false); */
        
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
    
        return $response;
    });
    //Ititnerary Edit and Delete Routes
    Route::get('itinerary/{liveaboard}', function($liveaboard) {
        $live = App\liveaboard::where('slug', $liveaboard)->first();
        $itineraries = App\liveaboard_itinerary::where('liveaboard_id', $live->id)->get();
        return view('liveaboard.admin.all-itinerary', compact('itineraries', 'live'));
    });
    Route::get('itinerary/edit/{liveaboard_itinerary}', 'LiveaboardItineraryController@edit');
    Route::post('itinerary/edit/{liveaboard_itinerary}', 'LiveaboardItineraryController@update');
    Route::get('itinerary/delete/{liveaboard_itinerary}', 'LiveaboardItineraryController@destroy');

    //Liveaboard Inquiries
    Route::get('/inquiry', function () {
        $inquiries = App\inquery::where('type', 'liveaboard')->get();
        return view('inquiry.live-table', compact('inquiries'));
    });

});

Route::group(['prefix' => 'catamaran'], function () {
    //Main Route
    Route::get('/', function () {
        $catamarans = App\catamaran::all();
        return view('catamaran.admin.all-catamaran', compact('catamarans'));
    });

    //Add Routes
    Route::get('add', 'CatamaranController@create');
    Route::post('add/post', 'CatamaranController@store');

    //Catamaran Edit and Delete Routes
    Route::get('edit/{catamaran}', 'CatamaranController@edit');
    Route::post('edit/{catamaran}', 'CatamaranController@update');
    Route::get('edit/{catamaran}/image/delete/{id}', 'CatamaranController@deleteImage');
    Route::get('edit/{catamaran}/image/main/{id}', function($catamaran, $id) {
        $live = App\catamaran::where('slug', $catamaran)->first();
        $old_photos = App\catamaran_photos::where('catamaran_id', $live->id)->get();
        foreach ($old_photos as $old_photo) {
            $old_photo->main = '0';
            $old_photo->save();
        }
        $photo = App\catamaran_photos::find($id);
        $photo->main = '1';
        $photo->save();
        return redirect('admin/catamaran/edit/'. $catamaran .'/#image_preview_old')->withInput();
    });
    Route::get('delete/{catamaran}', 'CatamaranController@destroy');
    
    //Ititnerary Adding Routes
    Route::get('itinerary/{catamaran}/add', 'CatamaranItinerariesController@create');
    Route::post('itinerary/{catamaran}/add/post', 'CatamaranItinerariesController@store');

    //Itinerary Edit and Delete Routes
    Route::get('itinerary/{catamaran}', function($catamaran) {
        $cat = App\catamaran::where('slug', $catamaran)->first();
        $itineraries = App\catamaran_itineraries::where('catamaran_id', $cat->id)->get();
        return view('catamaran.admin.all-itinerary', compact('itineraries', 'cat'));
    });
    Route::get('itinerary/edit/{catamaran_itineraries}', 'CatamaranItinerariesController@edit');
    Route::post('itinerary/edit/{catamaran_itineraries}', 'CatamaranItinerariesController@update');
    Route::get('itinerary/delete/{catamaran_itineraries}', 'CatamaranItinerariesController@destroy');

    Route::get('/inquiry', function () {
        $inquiries = App\inquery::where('type', 'catamaran')->get();
        return view('inquiry.cat-table', compact('inquiries'));
    });

});

Route::group(['prefix' => 'local-island'], function () {
    //Main Route
    Route::get('/', function () {
        $diving_spots = App\diving_spot::all();
        return view('diving-spots.admin.all', compact('diving_spots'));
    });

    Route::get('add', 'DivingSpotController@create');
    Route::post('add/post', 'DivingSpotController@store');

    //Local Island Edit and Delete Routes
    Route::get('edit/{diving_spot}', 'DivingSpotController@edit');
    Route::post('edit/{diving_spot}', 'DivingSpotController@update');
    Route::get('edit/{diving_spot}/image/delete/{id}', 'DivingSpotController@deleteImage');
    Route::get('edit/{diving_spot}/image/main/{id}', function($diving_spot, $id) {
        $live = App\diving_spot::where('slug', $diving_spot)->first();
        $old_photos = App\dive_photos::where('dive_id', $live->id)->get();
        foreach ($old_photos as $old_photo) {
            $old_photo->main = '0';
            $old_photo->save();
        }
        $photo = App\dive_photos::find($id);
        $photo->main = '1';
        $photo->save();
        return redirect('admin/local-island/edit/'. $diving_spot .'/#image_preview_old')->withInput();
    });
    Route::get('delete/{diving_spot}', 'DivingSpotController@destroy');

    Route::get('/inquiry', function () {
        $inquiries = App\inquery::where('type', 'local-island')->get();
        return view('inquiry.dive-table', compact('inquiries'));
    });

});

// table.blade
