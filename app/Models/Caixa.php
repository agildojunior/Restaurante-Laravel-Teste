<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    protected $fillable = ['mesa_id','agua','cerveja','refrigerante','PF','brigadeiro','preco',
    'valor_por_cliente','valor_por_cliente2','valor_por_cliente3','valor_por_cliente4',
    'metodo_pagamento_1','metodo_pagamento_2','metodo_pagamento_3','metodo_pagamento_4'];

    protected $table = 'caixa';
}
