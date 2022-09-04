<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['status','pessoa_1','pessoa_2','pessoa_3','pessoa_4', 'qtdd_produto_1',
    'qtdd_produto_2', 'qtdd_produto_3', 'qtdd_produto_4', 'qtdd_produto_5'];

    protected $table = 'mesas';
}
