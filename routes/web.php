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
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api){
    $api->get('/', function () {
        return view('welcome');
    });


    $api->group(
        [
            'prefix' => 'admin',
            'namespace' => 'App\Http\Controllers'
        ],
        function ($api){
            $api->get('/','AdminController@index');
            $api->group([
                'prefix' => 'act',
            ],
            function ($api){
                /**
                 * View
                 */
                $api->get('constructAdmin','Admin\ConstructController@indexAdmin');
                $api->get('aluminumAdmin','Admin\AluminumController@indexAdmin');
                $api->get('doorAdmin','Admin\DoorController@indexAdmin');
                $api->get('detailAdmin','Admin\DetailController@indexAdmin');


                /**
                 * Backend
                 */
                // construct
                $api->get('construct','Admin\ConstructController@index');
                $api->get('construct/create','Admin\ConstructController@getcreate');
                $api->get('construct/edit/{id}','Admin\ConstructController@edit');
                $api->get('construct/delete/{id}','Admin\ConstructController@delete');

                $api->post('construct','Admin\ConstructController@store');
                $api->post('construct/create','Admin\ConstructController@postcreate');
                $api->post('construct/edit/{id}','Admin\ConstructController@update');

                // admin aluminums
                $api->get('aluminum','Admin\AluminumController@index');
                $api->get('aluminum/create','Admin\AluminumController@getcreate');
                $api->get('aluminum/edit/{id}','Admin\AluminumController@edit');
                $api->get('aluminum/delete/{id}','Admin\AluminumController@delete');

                $api->post('aluminum','Admin\AluminumController@store');
                $api->post('aluminum/create','Admin\AluminumController@postcreate');
                $api->post('aluminum/edit/{id}','Admin\AluminumController@update');

                // admin doors
                $api->get('door','Admin\DoorController@index');
                $api->get('door/create','Admin\DoorController@getcreate');
                $api->get('door/edit/{id}','Admin\DoorController@edit');
                $api->get('door/delete/{id}','Admin\DoorController@delete');

                $api->post('door','Admin\DoorController@store');
                $api->post('door/create','Admin\DoorController@postcreate');
                $api->post('door/edit/{id}','Admin\DoorController@update');

                //admin detail_door
                $api->get('detail','Admin\DetailController@index');
                $api->get('detail/create','Admin\DetailController@getcreate');
                $api->get('detail/edit/{id}','Admin\DetailController@edit');
                $api->get('detail/delete/{id}','Admin\DetailController@delete');

                $api->post('detail','Admin\DetailController@store');
                $api->post('detail/create','Admin\DetailController@postcreate');
                $api->post('detail/edit/{id}','Admin\DetailController@update');



            });
        });
    });





