<?php

use App\Post;
use App\Mail\ContactInfo;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Notifications\contactClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;




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

        // Calculo del porcentaje
        $tipoDeuda = $request->debt;
        $deuda = $request->amount;

        if ($deuda >= 1000 && $deuda <= 5000) {
            $fee = '29%';
        } else if ($deuda >= 5001 && $deuda <= 10000) {
            $fee = '18%';
        } else if ($deuda >= 10001 && $deuda <= 15000) {
            $fee = '11%';
        } else if ($deuda >= 15001 && $deuda <= 30000) {
            $fee = '9%';
        } else if ($deuda >= 30001 && $deuda <= 50000) {
            $fee = '10%';
        } else if ($deuda >= 50001 && $deuda <= 70000) {
            $fee = '11%';
        } else if ($deuda >= 70000) {
            $fee = 'Acordar con el cliente';
        }

        if ($tipoDeuda == '1') {
            $retraso = 'más de 60 dias';
        } else if ($tipoDeuda == '2') {
            $retraso = '30 días o menos';
        } else {
            $retraso = 'No';
        }


        $data = new \stdClass();
        $data->deuda = $deuda;
        $data->retraso = $retraso;
        $data->lugar = $request->state;
        $data->nombre = $request->name;
        $data->apellido = $request->lname;
        $data->tlf = $request->phone;
        $data->to = $request->email;
        $data->fee = $fee;
        $data->vista = 'mail.contact_info';


        Mail::to('albertcharmelocontacto@gmail.com')->send(new ContactInfo($data));

        Notification::route('mail', $request->email)->notify(new contactClient($request->name, $request->lname));
        return 'ok';
    });
});

Route::post('/get/posts', function () {
    $posts = Post::where('estado', 'publish')->orderBy('created_at', 'DESC')->paginate(6);
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


Route::prefix('panel')->middleware(['auth'])->group(function () {
    // Route::get('/', 'PanelController@index');
    Route::get('/', 'PostController@allPost')->name('panel.index');
    Route::get('/create', 'PostController@create')->name('panel.create');
    Route::get('/edit/{post}', 'PostController@edit')->name('panel.edit');
    Route::post('/post/create', 'PostController@createPost')->name('post.create');
    Route::put('/post/edit/{id}', 'PostController@editPost')->name('post.edit');
    Route::put('/post/toogle/{id}', 'PostController@tooglePost')->name('post.toogle');
    Route::delete('/post/delete', 'PostController@deletePost')->name('post.destroy');
});


Auth::routes(["register" => false]);
