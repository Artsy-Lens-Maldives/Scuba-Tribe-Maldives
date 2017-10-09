<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


Route::group(['prefix' => 'liveaboard'], function () {
    
    Route::get('add', 'LiveaboardController@create');
    Route::post('add', 'LiveaboardController@store');

    Route::get('itinerary/add', 'LiveaboardController@itinerary');
    Route::post('itinerary/add', 'LiveaboardController@itinerary_add');

});

Route::group(['prefix' => 'catamaran'], function () {
    
  Route::get('add', 'CatamaranController@create');
  Route::post('add', 'CatamaranController@store');
  
  Route::get('itinerary/add', 'CatamaranController@itinerary');
  Route::post('itinerary/add', 'CatamaranController@itinerary_add');

});