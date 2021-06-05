<?php

use App\Post;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return  view('index');
})->name('index');

Route::prefix('calculator')->group(function () {

    Route::get('/', function () {
        return  view('calculadora.index');
    });
    Route::post('send', function (Request $request) {

        return 'ok';
    });
});

Route::get('/blog/{id_show}', function ($id) {
    $post = Post::where('id_show', $id)->get()->first();
    if ($post->estado == 'publish') {
        return view('blog.show')->with(compact('post'));
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
