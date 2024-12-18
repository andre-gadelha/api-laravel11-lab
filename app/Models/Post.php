<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['titulo', 'descricao',];

    //
    public function createPost(Request $request)
    {
        return static::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao
        ]);
    }
}
