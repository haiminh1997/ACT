<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Route frontend
 */
Route::prefix('act')->group(function (){
    //Route frontend construct
    Route::get('construct','Frontend\ConstructController@index');
    Route::post('construct/add','Frontend\ConstructController@create');
    Route::post('construct/delete','Frontend\ConstructController@delete');
    //Route frontend aluminum
    Route::get('aluminum','Frontend\AluminumController@index');
    //Route frontend door
    Route::get('door','Frontend\DoorController@index');
    Route::post('door/delete','Frontend/DoorController@delete');
    //Route frontend detail_door
    Route::get('detail','Frontend\DetailController@index');


});


/**
 * Route cho admin
 */
Route::prefix('admin')->group(function (){
    Route::get('/','AdminController@index')->name('admin.dashboard');
//    Route::get('/dashboard','AdminController@index')->name('admin.dashboard');
//    Route::get('register','AdminController@create')->name('admin.register');
//    Route::post('register','AdminController@store')->name('admin.register.store');
//    Route::get('login','Auth\Admin\LoginController@login')->name('admin.auth.login');
//    Route::post('login','Auth\Admin\LoginController@LoginAdmin')->name('admin.auth.loginAdmin');
//    Route::post('logout','Auth\Admin\LoginController@logout')->name('admin.auth.logout');

    /**
     * Route admin act
     */
    Route::prefix('act')->group(function (){
        // Route admin construct
        Route::get('construct','Admin\ConstructController@index');
        Route::get('construct/create','Admin\ConstructController@getcreate');
        Route::get('construct/edit/{id}','Admin\ConstructController@edit');
        Route::get('construct/delete/{id}','Admin\ConstructController@delete');

        Route::post('construct','Admin\ConstructController@store');
        Route::post('construct/create','Admin\ConstructController@postcreate');
        Route::post('construct/edit/{id}','Admin\ConstructController@update');

        // Route admin aluminums
        Route::get('aluminum','Admin\AluminumController@index');
        Route::get('aluminum/create','Admin\AluminumController@getcreate');
        Route::get('aluminum/edit/{id}','Admin\AluminumController@edit');
        Route::get('aluminum/delete/{id}','Admin\AluminumController@delete');

        Route::post('aluminum','Admin\AluminumController@store');
        Route::post('aluminum/create','Admin\AluminumController@postcreate');
        Route::post('aluminum/edit/{id}','Admin\AluminumController@update');

        // Route admin doors
        Route::get('door','Admin\DoorController@index');
        Route::get('door/create','Admin\DoorController@getcreate');
        Route::get('door/edit/{id}','Admin\DoorController@edit');
        Route::get('door/delete/{id}','Admin\DoorController@delete');

        Route::post('door','Admin\DoorController@store');
        Route::post('door/create','Admin\DoorController@postcreate');
        Route::post('door/edit/{id}','Admin\DoorController@update');

        // Route admin detail_door
        Route::get('detail','Admin\DetailController@index');
        Route::get('detail/create','Admin\DetailController@getcreate');
        Route::get('detail/edit/{id}','Admin\DetailController@edit');
        Route::get('detail/delete/{id}','Admin\DetailController@delete');

        Route::post('detail','Admin\DetailController@store');
        Route::post('detail/create','Admin\DetailController@postcreate');
        Route::post('detail/edit/{id}','Admin\DetailController@update');

    });
});
