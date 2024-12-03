<?php

namespace App\Http\Controllers\propriedadesForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class propFormController extends Controller
{
    public function propForms(){
        return view('forms.formulario');
    }





    public function checkValues(Request $request){
        $dados = $request->validate([
            'nome'=>'required|min:4|max:50',
            'email'=>'required',
            'telefone'=>'required'
        ]);

        $nomes = [];
        array_push($nomes, $request['nome']);

        if(empty($dados)){
            echo 'É necessário preencher o formulário';
        }
        else{
            var_dump($nomes);
        }

        //return redirect('propForms');
    }
}
