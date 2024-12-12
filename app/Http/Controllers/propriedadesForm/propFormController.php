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
        $dados = $request->validate(
            [
                'nome'=>'required|min:4|max:50',
                'email'=>'required',
                'telefone'=>'required'
            ],
            [
                'nome.required'=>'O campo :attribute deve estar preenchido',
                'nome.min'=>'O :attribute deve ter no mínimo 4 letras',
                'nome.max'=>'O :attribute deve ter no máximo 50 letras',
                'email.required'=>'O campo :attribute deve estar preenchido',
                'telefone.required'=>'O campo :attribute deve estar preenchido'
            ]
        );

        $nomes = [];
        array_push($nomes, $request['nome']);

        if(empty($dados)){
            echo 'É necessário preencher o formulário';
        }
    

        return redirect('propForms');
    }
}
