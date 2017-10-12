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
    
    Route::get('/all', function () {
        $liveaboards = App\liveaboard::all();
        return view('liveaboard.admin.all-admin', compact('liveaboards'));
    });
    
    Route::get('edit/{liveaboard}', 'LiveaboardController@edit');


    Route::get('add', 'LiveaboardController@create');
    Route::post('add/post', 'LiveaboardController@store');

    Route::get('itinerary/add', 'LiveaboardController@itinerary');
    Route::post('itinerary/add', 'LiveaboardController@itinerary_add');

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
