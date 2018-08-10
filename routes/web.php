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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//首頁
Route::get('/', ['as' => 'home.view', 'uses' => 'IndexController@home_veiw']);

Route::group(['prefix' => 'user'], function ()
{
  Route::get('list', ['as' => 'user.list.view', 'uses' => 'UserController@list_view']);
  Route::post('list', ['as' => 'user.create.api', 'uses' => 'UserController@create_delete_api']);
  Route::get('{id}', ['as' => 'user.update.view', 'uses' => 'UserController@update_view']);
  Route::post('{id}', ['as' => 'user.update.api', 'uses' => 'UserController@update_api']);
});
