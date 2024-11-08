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







        //->when(), @forelse(), array_column(). Pegando o maior valor de um array e depois passando a metade do valor do maior valor do array para o elemento com o valor igual a zero, para que esse menor valor agora tenha a metade do maior valor e o maior valor senha também a metade do seu valor anterior
        $database = [
            'usuarios'=>[
                ['nome'=>'Jordan', 'senha'=>'123jvb', 'pontos'=>567],
                ['nome'=>'Aldemiro', 'senha'=>'123adm', 'pontos'=>243],
                ['nome'=>'Mardisa', 'senha'=>'123mds', 'pontos'=>465],
                ['nome'=>'Bertolingus', 'senha'=>'123btl', 'pontos'=>578],
                ['nome'=>'Milindrosa', 'senha'=>'123mld', 'pontos'=>420],
                ['nome'=>'Bricotiucus', 'senha'=>'123brt', 'pontos'=>0],
            ]
        ];

        $novaLista = [];
        $maior = max(array_column($database['usuarios'], 'pontos'));
        $menor = min(array_column($database['usuarios'], 'pontos'));
        $novoValor = null;
        $novoMaiorValor = null;
        $indice = null;
        $indice2 = null;

        foreach($database['usuarios'] as $i=>$usuario){
            if($usuario['pontos'] == 0){
                $novoValor = $usuario['pontos'] = max(array_column($database['usuarios'], 'pontos'))/2;
                $indice = $i;

                array_push($novaLista, $novoValor);
            }

            if($usuario['pontos'] == max(array_column($database['usuarios'], 'pontos'))){
                $novoMaiorValor = max(array_column($database['usuarios'], 'pontos'));
                $indice2 = $i;
            }
        }

    

        $database['usuarios'][$indice]['pontos'] = $novoValor;
        $database['usuarios'][$indice2]['pontos'] = $novoMaiorValor - $novoValor;
        dd($database);

        return view('welcome', compact('array', 'usuarios', 'indefinida', 'database'));
    }
}
