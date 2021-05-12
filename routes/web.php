<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PagesController;

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
Route::get('/users/{id}/{name}',function($id,$name){
    return 'this is user ' .$name. ' with an id of ' .$id;
});
*/

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/profiles', 'App\Http\Controllers\UsersController@index');

Route::get('/welcome', 'App\Http\Controllers\PagesController@welcome');

Route::resource('/posts','App\Http\Controllers\PostsController');

// Route::get('/search/','App\Http\Controllers\PostsController@search');

Route::get('/profiles/{id}',[App\Http\Controllers\UsersController::class,'show']);





Route::get('/about', function(){
    return view('pages.about');
});


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
