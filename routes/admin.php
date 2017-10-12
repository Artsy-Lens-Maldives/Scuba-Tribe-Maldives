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
    
    Route::get('add', 'CatamaranController@create');
    Route::post('add/post', 'CatamaranController@store');
    
    Route::get('itinerary/add', 'CatamaranController@itinerary');
    Route::post('itinerary/add', 'CatamaranController@itinerary_add');

    Route::get('/inquiry', function () {
        $inquiries = App\inquery::where('type', 'catamaran')->get();
        return view('inquiry.cat-table', compact('inquiries'));
    });

});

Route::group(['prefix' => 'local-island'], function () {
    
    Route::get('add', 'DivingSpotController@create');
    Route::post('add', 'DivingSpotController@store');

    Route::get('/inquiry', function () {
        $inquiries = App\inquery::where('type', 'local-island')->get();
        return view('inquiry.dive-table', compact('inquiries'));
    });

});

// table.blade
