<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function ShowHome(Request $request){
        $frase = "A catita roeu a roupa do rei de itapipoca";
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
        $texto = "A canjica é muito boa, mas o povo só que tomar na época de festa junina, é igual ao panetone que é muito bom também mas o  povo só come no natal e no ano novo";
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
