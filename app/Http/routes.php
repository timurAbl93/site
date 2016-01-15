<?php

Route::get('/', function () {   
    $im = new App\Slider;
    $images = $im->latest()->limit(5)->get();
    return view('index',['images' => $images]);
});
Route::group(['middleware' => 'auth'],function(){
    
    Route::get('/dachboard','DachboardController@index');
    Route::get('/dachboard/edit', 'DachboardController@edit');
    Route::post('/dachboard/edit/{id}', 'DachboardController@destroy');
    Route::get('/dachboard/show/{id}', 'DachboardController@show');
    Route::get('/dachboard/uploads', 'ImageController@create');
    Route::post('/dachboard/uploads', 'ImageController@uploadImages');
    Route::get('/dachboard/gallery', 'ImageController@showGallery');
    Route::get('/dachboard/gallery/delete/{id}', 'ImageController@deleteImages');
    Route::get('/dachboard/gallery/slider/{im}', 'ImageController@slider');
    

});
Route::get('/login', ['middleware' => 'guest',
                      'uses' => 'UserController@getLogin'
]);
Route::post('/login',['middleware'=>'App\Http\Middleware\VerifyCsrfToken',
                            'uses'=> 'UserController@login']);
Route::post('/', ['middleware'=>'App\Http\Middleware\VerifyCsrfToken',
                        'uses'=> 'ProjectController@store']);
Route::get('/logout', function () {
    
    Auth::logout();
    return redirect('/');
});