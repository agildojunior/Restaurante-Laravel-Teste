<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    protected $fillable = ['mesa_id','agua','cerveja','refrigerante','PF','brigadeiro','preco',
    'metodo_pagamento_1','metodo_pagamento_2','metodo_pagamento_3','metodo_pagamento_4'];

    protected $table = 'caixa';
}
