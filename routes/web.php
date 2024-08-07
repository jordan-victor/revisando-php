<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\csvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;

use Illuminate\Http\Request;
use App\Http\Middleware\authMiddleware;

/*PRÁTICA*/
Route::middleware(authMiddleware::class)
->get('/', [HomeController::class, 'ShowHome'])//->middleware(authMiddleware::class);
->name('home');

Route::get('/sobre', [SobreController::class, 'ShowSobre'])->name('sobre');

Route::get('pratica', function(Request $request){
    $filtro = $request->opcao;

    class Produto{
        public $nome;
        public $preco;
        public $qtd;
        public $categoria;

        public function __construct($nome, $preco, $qtd, $categoria){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->qtd = $qtd;
            $this->categoria = $categoria; 
        }
    }

    $produtos = [];
    $p1 = new Produto('PC GAMER', 10000, 15, "computador");
    $p2 = new Produto('MOUSE', 169, 100, "periferico");
    $p3 = new Produto('TECLADO', 250, 0, "periferico");
    $p4 = new Produto('NOTEBOOK', 169, 100, "computador");
    array_push($produtos, $p1);
    array_push($produtos, $p2);
    array_push($produtos, $p3);
    array_push($produtos, $p4);


    if($filtro == "esgotado"){
        $arrayFilter = array_filter($produtos, function($produtos){
            return $produtos->qtd == 0;
        });
        $produtos = $arrayFilter;
    }

    else if($filtro == "todos"){
        $arrayFilter = array_filter($produtos, function($produtos){
            return $produtos->qtd >= 0;
        });
        $produtos = $arrayFilter;
    }

    return view('pratica.p1', ['produtos'=>$produtos]);
});









/*MOSTRAR DADOS DO CSV*/
Route::get('/notificacoes',[csvController::class, 'showForm']);
Route::post('process-csv', [CsvController::class, 'processCsv'])->name('process-csv');








/*TOTAS DE LOGIN*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';