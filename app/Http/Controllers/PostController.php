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

            $newpost = DB::table('t_posts')->insertGetId([
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'portada' => $path,
                'created_at' => now(),
                'updated_at' => now(),


            ]);

            Post::find($newpost)->update(['id_show' => md5($newpost)]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th;
        }

        return redirect()->route('panel.index')->with('postSave', 'guardado');
    }

    public function edit(Post $post)
    {

        return view('panel.partials.edit')->with(compact('post'));
    }

    static public function editPost(Request $request,  $post)
    {
        DB::beginTransaction();

        try {
            $newpost = Post::find($post)->update([
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion
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


    static public function tooglePost($id)
    {

        if (Post::find($id)->estado == 'pending') {

            Post::find($id)->update(['estado' => 'publish']);
            return back()->with('postSave', 'publicado');
        } else {
            Post::find($id)->update(['estado' => 'pending']);
            return back()->with('postSave', 'pendiente');
        }
    }

    static public function deletePost(Request $request)
    {

        Post::where('id', $request->input('post_id'))->delete();
        return back()->with('postSave', 'eliminado');
    }
}
