<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;
use App\Models\Produto;
use App\Models\Movimentacoes;

class mesasController extends Controller

{
    public function todasmesas(){
        $var1 = Produto::findOrFail(1);
        $var2 = Produto::findOrFail(2);
        $var3 = Produto::findOrFail(3);
        $var4 = Produto::findOrFail(4);
        $var5 = Produto::findOrFail(5);
        $precos = [
            'produto1' => $var1->preco,
            'produto2' => $var2->preco,
            'produto3' => $var3->preco,
            'produto4' => $var4->preco,
            'produto5' => $var5->preco,
        ];
        return view('mesas', ['mesas' =>Mesa::all() , $precos ] , compact('precos'));
    }

    public function movimentacoesDados(){
        $this->authorize('is_admin');
        return view('movimentacoes', ['movimentacoes' =>Movimentacoes::all()]);
    }
    
    public function reservarMesa($id, Request $request){
        Mesa::findOrFail($id)->update([
            'status' => 'ocupada',
            'qtdd_Pessoas' => $request->input('total'),
        ]);
        return redirect('/mesas');
    }

    public function adicionarPedidos($id, Request $request){
        $var = Mesa::findOrFail($id);
        $p1 = Produto::findOrFail(1)->preco;
        $p2 = Produto::findOrFail(2)->preco;
        $p3 = Produto::findOrFail(3)->preco;
        $p4 = Produto::findOrFail(4)->preco;
        $p5 = Produto::findOrFail(5)->preco;
        $valorprodutos = ($p1*$request->input('aguas'))+($p2*$request->input('cervejas'))+($p3*$request->input('refrigerantes'))+($p4*$request->input('pf'))+($p5*$request->input('brigadeiro'));

        Movimentacoes::create([
            'mesa_id' => $id,
            'agua' => $request->input('aguas'),
            'cerveja' => $request->input('cervejas'),
            'refrigerante' => $request->input('refrigerantes'),
            'PF' => $request->input('pf'),
            'brigadeiro' => $request->input('brigadeiro'),
            'preco' => $valorprodutos,
        ]);

        Mesa::findOrFail($id)->update([
            'qtdd_produto_1' => $var->qtdd_produto_1 + $request->input('aguas'),
            'qtdd_produto_2' => $var->qtdd_produto_2 + $request->input('cervejas'),
            'qtdd_produto_3' => $var->qtdd_produto_3 + $request->input('refrigerantes'),
            'qtdd_produto_4' => $var->qtdd_produto_4 + $request->input('pf'),
            'qtdd_produto_5' => $var->qtdd_produto_5 + $request->input('brigadeiro'),
        ]);

        return redirect('/mesas');
    }

    public function removerPedidos($id, Request $request){
        $var = Mesa::findOrFail($id);

        //aguas
        if( $request->input('aguas') <= $var->qtdd_produto_1){
            Mesa::findOrFail($id)->update([
                'qtdd_produto_1' => $var->qtdd_produto_1 - $request->input('aguas'),
            ]);
        }else{
            Mesa::findOrFail($id)->update([
                'qtdd_produto_1' => $var->qtdd_produto_1 - $var->qtdd_produto_1,
            ]);
        }
        //cervejas
        if( $request->input('cervejas') <= $var->qtdd_produto_2){
            Mesa::findOrFail($id)->update([
                'qtdd_produto_2' => $var->qtdd_produto_2 - $request->input('cervejas'),
            ]);
        }else{
            Mesa::findOrFail($id)->update([
                'qtdd_produto_2' => $var->qtdd_produto_2 - $var->qtdd_produto_2,
            ]);
        }
        //refrigerantes
        if( $request->input('refrigerantes') <= $var->qtdd_produto_3){
            Mesa::findOrFail($id)->update([
                'qtdd_produto_3' => $var->qtdd_produto_3 - $request->input('refrigerantes'),
            ]);
        }else{
            Mesa::findOrFail($id)->update([
                'qtdd_produto_3' => $var->qtdd_produto_3 - $var->qtdd_produto_3,
            ]);
        }
        //pf
        if( $request->input('pf') <= $var->qtdd_produto_4){
            Mesa::findOrFail($id)->update([
                'qtdd_produto_4' => $var->qtdd_produto_4 - $request->input('pf'),
            ]);
        }else{
            Mesa::findOrFail($id)->update([
                'qtdd_produto_4' => $var->qtdd_produto_4 - $var->qtdd_produto_4,
            ]);
        }
        //brigadeiro
        if( $request->input('brigadeiro') <= $var->qtdd_produto_5){
            Mesa::findOrFail($id)->update([
                'qtdd_produto_5' => $var->qtdd_produto_5 - $request->input('brigadeiro'),
            ]);
        }else{
            Mesa::findOrFail($id)->update([
                'qtdd_produto_5' => $var->qtdd_produto_5 - $var->qtdd_produto_5,
            ]);
        }

        return redirect('/mesas');
    }

    public function solicitarConta($id, Request $request){
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
