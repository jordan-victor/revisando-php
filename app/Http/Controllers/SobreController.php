<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Produto{
    public $produto;
    public $preco;
    public $qtd;
    public $categotia;

    public function __construct($produto, $preco, $qtd, $categotia){
        $this->produto=$produto;
        $this->preco=$preco;
        $this->qtd =$qtd;
        $this->categotia=$categotia;
    }
}

class SobreController extends Controller
{
    public function ShowSobre(Request $request, $param=null){
        echo $param;
        $produtos = [];
        $pc = new Produto("PC gamer", 6000, 10, "Informática");
        $mouse = new Produto("Mouse", 160, 150, "Informática");
        $teclado = new Produto("Teclado", 250, 0, "Informática");

        array_push($produtos, $pc);
        array_push($produtos, $mouse);
        array_push($produtos, $teclado);

        echo $produtos[0]->produto;

        $nome = $request -> nome;
        $lista = [1,2,3,4,5,6,7,8,9,10];
        
        return view('sobre', ['param'=> $param, 'lista'=>$lista, 'nome'=>$nome, 'produtos'=>$produtos]);
    }
}
