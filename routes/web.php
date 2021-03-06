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
/*新增方法*/
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

Route::get('/newcmadd', function () {
    $post= new \App\Comment();
    $post -> title = 'saved title';
    $post -> content = 'post1 com';
     $post -> post_id = '1';
    $post->save();
});

/*查詢方法*/
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
/*更新方法*/

Route::get('update', function () {
    $post = \App\Post::find(1);
    $post ->update([
    	'title' =>'update title',
    	'content' => 'update content'
    ]);
});
Route::get('save', function () {
    $post = \App\Post::find(2);
    $post ->title ='save title';
    $post ->content ='save content';
    $post ->save();
});
/*刪除方法*/

Route::get('delete', function () {
    $post = \App\Post::find(1);
    $post ->delete();
});
Route::get('destroy', function () {
    \App\Post::destroy(2);
});
Route::get('destroymul', function () {
    \App\Post::destroy(3,5,7);
});

/*了解 Model 和 Collection 的差異*/
Route::get('collection', function () {
    $allPosts = \App\Post::all();
	dd($allPosts);
});
Route::get('model', function () {
	$fourthPost=\App\Post::find(4);
	dd($fourthPost);
	$lastPost=\App\Post::orderBy('id','DESC')->first();
	dd($lastPost);
});

Route::get('testt', function () {
	$post = \App\Post::find(1);
	foreach ($post->comments as $comment){
	echo $comment->content.'<br>';
	}
});