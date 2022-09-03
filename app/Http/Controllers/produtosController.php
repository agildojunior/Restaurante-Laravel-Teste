<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class produtosController extends Controller
{

    public function todosprodutos(){
        return view('produtos', ['events' =>Produto::all()]);
    }


    public function editarproduto($id){
        return view('editarProduto', ['event' =>Produto::findOrFail($id)]);
    }
    public function editarproduto2($id, Request $request){

        Produto::findOrFail($id)->update(['preco' => $request->input('preco')]);
        
        return redirect('/produtos');
    }

}
