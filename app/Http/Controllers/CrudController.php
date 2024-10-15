<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rural;

class CrudController extends Controller
{
    public function showRegistros(){
        $registros = Rural::all();
        $filtro = Rural::where('cpf_prof', '=', '02635130256')->get();
        //echo count($registros);
        return view('pratica.registros', ['registros'=>$registros, 'filtro'=>$filtro]);
    }
}
