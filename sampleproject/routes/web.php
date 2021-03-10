<?php
use App\Post;
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

Route::get('/test_read', function(){//データ読み込み
    return App\Post::find(1);
});
Route::get('/test_edit', function(){//データ編集
    $posts = App\Post::find(1);
    $posts->content = 'Laravel demo 6.0 day 11';
    $posts->save();
    return $posts;
});
Route::get('/test_massedit', function(){//データまとめて変更
    $posts = App\Post::all();
    $posts->each->update([
        'content' => 'Laravel demo 6.0 day 11 test'
    ]);
    return $posts;
});
Route::get('/test_add',function () {//データ新規作成
  $post =  new App\Post;
  $post->content = 'laravel de test';
  $post->save();
  return $posts;
});
Route::get('/test_delete', function(){//データ削除
    $posts = App\Post::find(1);
    $posts->delete();
});
Route::get('/test_massdelete', function(){//まとめて削除
    $posts = App\Post::destroy([2, 3]);
    return $posts;
});
Route::get('/test', function(){
  return Post::cursor();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostController');
