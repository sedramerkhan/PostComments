<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/post/create','\App\Http\Controllers\PostController@create')->name("posts.create");
Route::post('/post/store','\App\Http\Controllers\PostController@store')->name("posts.store");
Route::put('/update/{id}','App\Http\Controllers\PostController@update')->name('posts.update');
Route::get('/edit/{id}','App\Http\Controllers\PostController@edit')->name('posts.edit');
Route::delete('/destroy/{id}','App\Http\Controllers\PostController@destroy')->name('posts.destroy');

Route::get('/posts','\App\Http\Controllers\PostController@index')->name("posts.index");
Route::get('/comments','\App\Http\Controllers\CommnetController@index')->name("comments.index");
Route::get('/users','\App\Http\Controllers\UserController@index')->name("users.index");

Route::get('/post/{id}','\App\Http\Controllers\PostController@show')->name("posts.show");

Route::get('/user/edit/{id}','\App\Http\Controllers\UserController@edit')->name("users.edit");
Route::put('/user/update/{id}','\App\Http\Controllers\UserController@update')->name("users.update");
Route::get('/user/index','\App\Http\Controllers\UserController@index')->name("users.index");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::middleware('test')->get('api_test',[\App\Http\Controllers\Controller::class,'test']);




//Route::get('/test',function (){
//    $lang = \Illuminate\Support\Facades\Lang::getLocale();
//    return response()->json([
//        'msg' =>$lang == 'ar' ? trans('error') :'error',
//        'code'=>'200',
//        'status'=> '200',
//        'data'=>'data',
//    ]);
//});
