<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\csvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\propriedadesForm\propFormController;



use Illuminate\Http\Request;
use App\Http\Middleware\authMiddleware;

/*PRÁTICA*/
Route::middleware(authMiddleware::class)
->get('/', [HomeController::class, 'ShowHome'])//->middleware(authMiddleware::class);
->name('home');

Route::get('/sobre/{param?}', [SobreController::class, 'ShowSobre'])->name('sobre');

Route::get('/pratica', function(Request $request){
    $filtro = $request->opcao;
    $prod = $request->pesquisado;

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
    $p4 = new Produto('NOTEBOOK', 4500, 100, "computador");
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

    else if ($filtro == "computador"){
        $arrayFilter = array_filter($produtos, function($produtos){
            return $produtos->categoria == "computador";
        });
        $produtos = $arrayFilter;
    }

    else if($filtro == "periferico"){
        $arrayFilter = array_filter($produtos, function($produtos){
            return $produtos->categoria == "periferico";
        });
        $produtos = $arrayFilter;
    }




    $pesquisado = null;
    $createPesquisado = [];
    if($prod != null){
        foreach($produtos as $produto){
            if($produto->nome == $prod){
                echo "Achado";
            }
        }
        
        $pesquisado = array_filter($produtos, function($produtos) use($prod){
            return $produtos->nome === $prod;
        });

        array_push($createPesquisado, $pesquisado);
        echo count($createPesquisado); 
    }
    
    //PESQUISA DO PRODUTO
    $copiaProduto = null;
    $msg = null;
    if($prod != null){
        foreach($produtos as $produto){
            if($produto->nome == $prod){
                $copiaProduto = new Produto($produto->nome, $produto->preco, $produto->qtd, $produto->categoria);
                $c = [];
                array_push($c, $copiaProduto);
                $produtos = $c;
            }     
        }
        if(empty($copiaProduto)){
            $msg = "Produto não encontrado";
        }
    }


    return view('pratica.p1',
        [
            'produtos'=>$produtos,
            'pesquisado'=>$pesquisado,
            'copiaProduto'=>$copiaProduto,
            'msg'=>$msg
        ]
    );
});









//PRATICANDO O CRUD
Route::get('/registros', [CrudController::class, 'showRegistros'])->name('registros');







/*MOSTRAR DADOS DO CSV*/
Route::get('/notificacoes',[csvController::class, 'showForm']);
Route::post('process-csv', [CsvController::class, 'processCsv'])->name('process-csv');





//PROPRIEDADE old()
Route::get('/propForms', [propFormController::class, 'propForms'])->name('propForms');
Route::post('/sendValues', [propFormController::class, 'checkValues'])->name('sendValues');





/*ROTAS DE LOGIN*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';