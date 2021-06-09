<?php

use App\Notifications\contactClient;
use App\Post;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {

    $posts = Post::where('estado', 'publish')->paginate(3);
    // dd($posts);

    return  view('index')->with(compact('posts'));
})->name('index');

Route::get('/terms',function(){
    return view('terms');
});
Route::get('/privacy',function(){

    return view('privacy');
});
Route::prefix('calculator')->group(function () {

    Route::get('/', function () {
        return  view('calculadora.index');
    });
    Route::post('send', function (Request $request) {



        Notification::route('mail', $request->email)->notify(new contactClient($request->name, $request->lname));
        return 'ok';
    });
});

Route::post('/get/posts', function () {
    $posts = Post::where('estado', 'publish')->orderBy('created_at', 'DESC')->paginate(4);
    return $posts;
});
Route::get('/blog/{id_show}', function ($id) {
    $post = Post::where('id_show', $id)->get()->first();
    $newestPost = Post::where('estado', 'publish')->orderBy('created_at', 'DESC')->take(3)->get();
    $MostVisitedPost = Post::where('estado', 'publish')->orderBy('visitas', 'DESC')->take(3)->get();

    if ($post->estado == 'publish') {
        return view('blog.show')->with(compact('post', 'newestPost', 'MostVisitedPost'));
    } else {
        return redirect()->route('index');
    }
});


Route::prefix('panel')->group(function () {
    // Route::get('/', 'PanelController@index');
    Route::get('/', 'PostController@allPost')->name('panel.index');
    Route::get('/create', 'PostController@create')->name('panel.create');
    Route::get('/edit/{post}', 'PostController@edit')->name('panel.edit');
    Route::post('/post/create', 'PostController@createPost')->name('post.create');
    Route::put('/post/edit/{id}', 'PostController@editPost')->name('post.edit');
    Route::put('/post/toogle/{id}', 'PostController@tooglePost')->name('post.toogle');
    Route::delete('/post/delete', 'PostController@deletePost')->name('post.destroy');
});

Route::get('/home', 'HomeController@index')->name('home');
