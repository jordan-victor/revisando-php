<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function ShowSobre(Request $request, $param=null){
        $nome = $request -> nome;
        $lista = [1,2,3,4,5,6,7,8,9,10];
        
        return view('sobre', ['param'=> $param, 'lista'=>$lista, 'nome'=>$nome]);
    }
}
