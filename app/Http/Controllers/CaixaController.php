<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caixa;
use App\Models\Mesa;
use App\Models\Produto;

class CaixaController extends Controller
{
    public function caixaDados(){
        $this->authorize('is_admin');
        $caixas = Caixa::paginate(10);
        
        return view('caixa', compact('caixas'));
    }

    public function adicionarAoCaixa($id, Request $request){
        
        $var = Mesa::findOrFail($id);

        Caixa::create([
            'mesa_id' => $var->id,
            'agua' => $var->qtdd_produto_1,
            'cerveja' => $var->qtdd_produto_2,
            'refrigerante' => $var->qtdd_produto_3,
            'PF' => $var->qtdd_produto_4,
            'brigadeiro' => $var->qtdd_produto_5,
            'preco' => $request->input('pagamentototal'),
            'valor_por_cliente' => $request->input('pagamento1'),
            'metodo_pagamento_1' => $request->input('metodo1'),
            'valor_por_cliente2' => $request->input('pagamento2'),
            'metodo_pagamento_2' => $request->input('metodo2'),
            'valor_por_cliente3' => $request->input('pagamento3'),
            'metodo_pagamento_3' => $request->input('metodo3'),
            'valor_por_cliente4' => $request->input('pagamento4'),
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
