<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;

class mesasController extends Controller
{
    public function todasmesas(){
        return view('mesas', ['mesas' =>Mesa::all()]);
    }

    public function reservarMesa($id, Request $request){
        Mesa::findOrFail($id)->update([
            'status' => 'ocupada',
            'qtdd_Pessoas' => $request->input('total'),
        ]);
        return redirect('/mesas');
    }

    public function solicitarConta($id, Request $request){
        Mesa::findOrFail($id)->update([
            'status' => 'disponivel',
            'qtdd_Pessoas' => null,
        ]);
        return redirect('/mesas');
    }

}
