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
    Route::post('/edit/profile-overview', 'AdminController@editProfileOverview');
    Route::post('/edit/profile-detail', 'AdminController@editProfileDetail');
    Route::post('/uploadImage', 'ImageController@uploadImage');
    Route::get('/', 'AdminController@index');
    Route::get('/project', 'AdminController@getProject');
    Route::get('/project/add', 'AdminController@addProject');
    Route::post('/project/save', 'AdminController@saveProject');
    Route::post('/project/save/{id}', 'AdminController@saveIdProject');
    Route::get('/project/edit/{id}', 'AdminController@editProject')->where(['id' => '[0-9]+']);
    Route::get('/project/delete/{id}', 'AdminController@deleteProject')->where(['id' => '[0-9]+']);
    Route::get('/sketch', 'AdminController@getSketch');
    Route::get('/sketch/add', 'AdminController@addSketch');
    Route::post('/sketch/save', 'AdminController@saveSketch');
    Route::get('/image-manage', 'AdminController@uploadImg');
    Route::get('/change-password', 'AdminController@changePass');
    Route::get('/edit-profile', 'AdminController@getEditProfileView');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/filter/project/{type}', 'HomeController@filter');
Route::get('/getmore/project/{page}', 'HomeController@getMoreProject')->where(['page' => '[0-9]+']);
Route::get('/profile', 'HomeController@profile');
Route::get('/sketch', 'HomeController@sketch');
Route::get('/project/{slug}', 'HomeController@getDetail');