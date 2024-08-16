<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class Venda{
    public $valor;
    public $funcionario;

    public function __construct($valor, $funcionario){
        $this->valor = $valor;
        $this->funcionario = $funcionario;
    }
}

class HomeController extends Controller
{
    public function ShowHome(Request $request){
        $v1 = new Venda(450000, "Biriquiticus");
        $v2 = new Venda(550000, "Jucelinus");
        $v3 = new Venda(530000, "Loronildus");
        $v4 = new Venda(1000000, "Pracelevóceles");

        $vendas = [];
        array_push($vendas, $v1);
        array_push($vendas, $v2);
        array_push($vendas, $v3);
        array_push($vendas, $v4
    );

        $maiorValor = [];
        foreach($vendas as $venda){
            array_push($maiorValor, $venda->valor);
        }
        echo max($maiorValor);


        $frase = "A catita roeu a roupa do rei de Roma";
        //echo "A soma de ".$num1." + ".$num2. " é igual a ".($num1 + $num2);
        $indefinida = $request->texto;
        $array = [1,2,3,4,5,6,7,8,9,10];
        $usuarios =[
            'user'=>[
                'nome'=>'Jordan',
                'idade'=>1000,
                'email'=>"jordan@gmail.com"
            ],
        ];

        //$msg = isset($usuarios['user']['idad']) ? 'existe' : 'não existe';
        //echo $msg;
        array_push($array, 11);
        strlen($frase);




        //PRATICANDO FUNÇÕES BÁSICAS
        $array = [];
        $texto = "Estudando Laravel e PHP";
        $strLenght = strlen($texto);

        for($i=0; $i <= $strLenght; $i++){
            if($i == $strLenght){
                $tamanho = count($array);
            }
            else{
                array_push($array, $i);
                //echo "$i<br>"; 
            } 
        }

        foreach($array as $item){
            echo "Número: $item<br>";
        }

        return view('welcome', compact('array', 'usuarios', 'indefinida'));
    }
}
