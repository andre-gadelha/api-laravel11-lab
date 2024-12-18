<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    //Insert
    public function store(Request $request)
    {
        return $request->titulo;
        /*
        $request->validate([
            'title' => 'required|string|max:255',
            'descricao' => 'required'
        ]);

    

       // Post::createPost($request->all());

        //return redirect()->route('posts.index');
       */
    }
}
