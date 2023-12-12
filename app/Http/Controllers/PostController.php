<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Retourne la vue contenant la liste des publication
     */
    public function index() : View {
        $posts = Post::all();
        return view("posts.index", compact("posts"));
    }


    /**
     * Retourne la vue de de detail d'une publication
     */
    public function show(Post $post) : View {
        return view("posts.show", compact("post"));
    }

    /**
     * Retourner la vue du formulaire de creation d'une publication
     */
    public function create () : View{
        return view("posts.create");
    }

    /**
     * Gerer l'enregistrement d'une publication
     */
    public  function  store(StorePostRequest $request) : RedirectResponse  {
        Post::query()->create(
            [
                "title" => $request->validated("title"),
                "content" => $request->validated("content"),
                "user_id" => Auth::user()->id
            ]
        );
        return redirect()->route("posts.index")->with("success", "Publication ajoutee");
    }

    /**
     * Retourner la vue du formulaire de modification d'une publication
     */
    public function edit(Post $post) : View{
        return view("posts.edit", compact("post"));
    }
    /**
     * Gerer la mise a jour d'une publication
     */
    public function update( UpdatePostRequest $request, Post $post) : RedirectResponse {
        $post->update($request->validated());
        return redirect()->route("posts.index")->with("success", "Publication Mise a jour");
    }

    /**
     * Gerer la suppression d'une publication
     */
    public function destroy(Post $post) : RedirectResponse{
        $this->authorize("delete", $post);
        $post->delete();
        return redirect()->route("posts.index")->with("success", "Publication suppreme");
    }



}
