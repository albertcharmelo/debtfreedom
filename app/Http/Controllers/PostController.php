<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function create()
    {


        return view('panel.partials.create');
    }

    static public function createPost(Request $request)
    {

        $path = '/blog/portadas/' . $request->imagennombre;



        DB::beginTransaction();

        try {

            DB::table('t_posts')->insertGetId([
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'portada' => $path,
                'created_at' => now(),
                'updated_at' => now(),


            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th;
        }

        return back();
    }

    public function allPost()
    {
        $posts = Post::all();
        $visitas = DB::table('t_posts')->sum('visitas');

        return view('panel.partials.allPost')->with(compact(['posts', 'visitas']));
    }
}
