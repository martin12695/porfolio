<?php
use Illuminate\Auth\Middleware\Authenticate;
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

Route::get('/', 'HomeController@index');


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/project', 'AdminController@getProject');
    Route::get('/project/add', 'AdminController@addProject');
    Route::post('/project/save', 'AdminController@saveProject');
    Route::post('/project/save/{id}', 'AdminController@saveIdProject');
    Route::get('/project/edit/{id}', 'AdminController@editProject')->where(['id' => '[0-9]+']);
    Route::get('/project/delete/{id}', 'AdminController@deleteProject')->where(['id' => '[0-9]+']);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile');
