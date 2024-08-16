@extends('layouts.padrao')

@section('content')
    <h1>PRÁTICA</h1>
    @isset($msg)
        <p>{{$msg}}</p> 
    @endisset

    @isset($copiaProduto)
        <ul>
            <li><strong>Produto:</strong> {{$copiaProduto->nome}}</li>
            <li><strong>Preço:</strong> {{$copiaProduto->preco}}R$</li>
            <li><strong>Quantidade:</strong> {{$copiaProduto->qtd}}und</li>
            <li><strong>Categoria:</strong> {{$copiaProduto->categoria}}</li>
        </ul>
    @endisset

    <hr>
    @include('layouts.navbar') <br><br><br>

    <form action="/pratica" method="get" id="form">
        <select name="opcao" id="opcao" id="select" onchange="change()">
            <option>Categorias</option>
            <option value="todos">Todos</option>
            <option value="esgotado">Esgotado</option>
            <option value="computador">Computadores</option>
            <option value="periferico">Periféricos</option>
        </select>

        <input type="text" name="pesquisado" placeholder="Pesquisar produto">
    </form>

    <h2>PRODUTOS</h2>
    <hr>
    @isset($pesquisado)
        @empty($pesquisado)
            <p></p>
        @endempty
       
    @endisset


    @foreach($produtos as $produto)
        <p>Nome: {{$produto->nome}}</p>
        <p>Categoria: {{$produto->categoria}}</p>
        <p>Preço: {{$produto->preco}} R$</p>
        @if($produto->qtd == 0)
            <p style="color:red;">QTD: {{$produto->qtd}} UND</p>  
        @else
            <p>QTD: {{$produto->qtd}} UND</p>
        @endif
        <hr>
    @endforeach
</body>


<script>
    /*
    let form = document.getElementById("form").addEventListener('change',()=>{
        alert("foi")
    })
    */
    function change(){
        document.getElementById("form").submit()
    }
</script>
@endsection