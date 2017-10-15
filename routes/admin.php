<?php

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
    Route::get('delete/{liveaboard}', 'LiveaboardController@destroy');

    //Ititnerary Adding Routes
    Route::get('itinerary/{liveaboard}/add', 'LiveaboardItineraryController@create');
    Route::post('itinerary/{liveaboard}/add', 'LiveaboardItineraryController@store');
    
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
    Route::post('add', 'DivingSpotController@store');

    //Local Island Edit and Delete Routes
    Route::get('edit/{diving_spot}', 'DivingSpotController@edit');
    Route::post('edit/{diving_spot}', 'DivingSpotController@update');
    Route::get('edit/{diving_spot}/image/delete/{id}', 'DivingSpotController@deleteImage');
    Route::get('delete/{diving_spot}', 'DivingSpotController@destroy');

    Route::get('/inquiry', function () {
        $inquiries = App\inquery::where('type', 'local-island')->get();
        return view('inquiry.dive-table', compact('inquiries'));
    });

});

// table.blade
