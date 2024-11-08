<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rural;

class CrudController extends Controller
{
    public function showRegistros(){
        $registros = Rural::select('cpf_prof', 'nome_prof','cargo',Rural::raw('COUNT(cargo) as mais_comum'))
        ->groupBy('cpf_prof', 'nome_prof', 'cargo')
        ->orderBy('mais_comum', 'DESC')
        ->get();
    
        $filtro = Rural::where('cpf_prof', '=', '02635130256')->get();


        return view('pratica.registros', ['registros'=>$registros, 'filtro'=>$filtro]);
    }
}
