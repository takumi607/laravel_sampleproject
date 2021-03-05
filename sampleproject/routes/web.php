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
Route::get('/hello-world', function () {
    return view('hello_world');
});
Route::get('/about_us',function () {
  return view('about_us',['name' => 'laravel6.0的範例！']);
});

Route::get('/inspire','InspiringController@inspire');

Route::get('/test',function () {
  $post =  new App\Post;
  $post->content = 'laravel de test';
  $post->save();
  return $post;

});
