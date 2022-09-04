<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;

class mesasController extends Controller
{
    public function todasmesas(){
        return view('mesas', ['mesas' =>Mesa::all()]);
    }
}
