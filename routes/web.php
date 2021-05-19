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
