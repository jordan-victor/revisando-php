<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    $nome = "Jordan";

    date_default_timezone_set('America/Manaus');
    $data = date('d/m/Y');
    $hora = date('H:i:s');

    $array = [$data, $hora];

    //Construindo um objeto de usuário
    class User{
        public $nome;
        public $idade;
        public $email;

        public function __construct($nome, $idade, $email){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
        }

        public function mostrarDados(){
            return "Olá, "."Eu me chamo ".$this->nome." "."e tenho ".$this->idade." anos";
        }
    }
    //-------------------------------------------------------------------------------------

    $usuario1 = new User("Jordan", 28, "jordanvictor63@gmail.com");
    $usuario2 = new User("João", 56, "joao@gmail.com");
    $usuario3 = new User("Mardizaa", 36, "mardizaa@gmail.com");
    $usuarios = [];
    array_push($usuarios, $usuario1);
    echo $usuarios[0]->nome."<br>";


    echo $usuario1->nome;
    echo "<br>";
    echo $usuario1->mostrarDados();
    return view('home',['nome'=>$nome, 'array'=>$array, 'usuario1'=>$usuario1]);
});
