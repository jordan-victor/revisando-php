<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Alertaarbovirose;

class CrudController extends Controller
{
    public function showRegistros(){
        $registros = Alertaarbovirose::all();
        $resultados = Alertaarbovirose::where('cpf','=', '02635130256')->get();
        //echo count($registros)."<br>";
        //echo count($resultados);
        return view('pratica.registros', ['registros'=>$registros, 'resultados'=>$resultados]);
    }
}
