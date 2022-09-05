<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacoes extends Model
{
    protected $fillable = ['mesa_id','agua','cerveja','refrigerante','PF','brigadeiro','preco',];

    protected $table = 'movimentacoes';
}
