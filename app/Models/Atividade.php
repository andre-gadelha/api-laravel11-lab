<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    /** @use HasFactory<\Database\Factories\AtividadeFactory> */
    use HasFactory;

    protected $fillable = ['titulo', 'descricao',];
}
