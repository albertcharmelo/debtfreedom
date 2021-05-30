<?php

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return  view('index');
});

Route::prefix('calculator')->group(function () {

    Route::get('/', function () {
        return  view('calculadora.index');
    });
    Route::post('send', function (Request $request) {

        return 'ok';
    });
});


Route::prefix('panel')->group(function () {

    // Route::get('/', 'PanelController@index');
    Route::get('/', 'PostController@allPost')->name('panel.index');
    Route::get('/create', 'PostController@create')->name('panel.create');

    Route::post('/post/create', 'PostController@createPost')->name('post.create');
});
