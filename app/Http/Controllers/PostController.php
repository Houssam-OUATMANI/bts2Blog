<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
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
    public function show() {}

    /**
     * Retourner la vue du formulaire de creation d'une publication
     */
    public function create () : View{
        return view("posts.create");
    }

    /**
     * Gerer l'enregistrement d'une publication
     */
    public  function  store() {}

    /**
     * Retourner la vue du formulaire de modification d'une publication
     */
    public function edit() {}
    /**
     * Gerer la mise a jour d'une publication
     */
    public function update() {}

    /**
     * Gerer la suppression d'une publication
     */
    public function destroy(){}



}
