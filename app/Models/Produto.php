<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produto extends RModel
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'valor', 'foto', 'descricao', 'categoriaId'];
}
