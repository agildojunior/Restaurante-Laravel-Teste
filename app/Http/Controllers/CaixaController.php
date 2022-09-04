<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caixa;
use App\Models\Mesa;
use App\Models\Produto;

class CaixaController extends Controller
{
    public function caixaDados(){
        return view('caixa', ['caixas' =>Caixa::all()]);
    }

    public function adicionarAoCaixa($id, Request $request){
        
        $var = Mesa::findOrFail($id);
        $var1 = Produto::findOrFail(1);
        $var2 = Produto::findOrFail(2);
        $var3 = Produto::findOrFail(3);
        $var4 = Produto::findOrFail(4);
        $var5 = Produto::findOrFail(5);
        $preco = (($var->qtdd_produto_1 * $var1->preco)+($var->qtdd_produto_2 * $var2->preco)+($var->qtdd_produto_3 * $var3->preco)+($var->qtdd_produto_4 * $var4->preco)+($var->qtdd_produto_5 * $var5->preco));
        $precodividido = ($preco/$var->qtdd_Pessoas);

        Caixa::create([
            'mesa_id' => $var->id,
            'agua' => $var->qtdd_produto_1,
            'cerveja' => $var->qtdd_produto_2,
            'refrigerante' => $var->qtdd_produto_3,
            'PF' => $var->qtdd_produto_4,
            'brigadeiro' => $var->qtdd_produto_5,
            'preco' => $preco,
            'valor_por_cliente' => $precodividido,
            'metodo_pagamento_1' => $request->input('metodo1'),
            'metodo_pagamento_2' => $request->input('metodo2'),
            'metodo_pagamento_3' => $request->input('metodo3'),
            'metodo_pagamento_4' => $request->input('metodo4'),
        ]);

        Mesa::findOrFail($id)->update([
            'status' => 'disponivel',
            'qtdd_Pessoas' => null,
            'qtdd_produto_1' => 0,
            'qtdd_produto_2' => 0,
            'qtdd_produto_3' => 0,
            'qtdd_produto_4' => 0,
            'qtdd_produto_5' => 0,
        ]);

        return redirect('/mesas');
    }
}
