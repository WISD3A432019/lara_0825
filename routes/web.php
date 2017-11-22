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
Route::get('/test', function () {
    \App\Post::create([
	'title'=> 'test title',
	'content'=>'test content',
	]);
});

Route::get('/newadd', function () {
    $post = new \App\Post();
    $post -> title ='newadd title';
    $post -> content ='newadd content';
    $post -> save();
});

Route::get('/all', function () {
    $posts = \App\Post::all();
    dd($posts); 
});

Route::get('/find', function () {
    $posts = \App\Post::find(1);
    dd($posts); 
});

Route::get('/where', function () {
    $posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
	dd($posts);
});