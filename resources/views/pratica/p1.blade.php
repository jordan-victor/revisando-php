<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PRÁTICA</h1>

    <form action="/pratica" method="get" id="form">
        <select name="opcao" id="opcao" id="select" onchange="change()">
            <option>Categorias</option>
            <option value="todos">Todos</option>
            <option value="esgotado">Esgotado</option>
            <option value="computador">Computadores</option>
            <option value="periferico">Periféricos</option>
        </select>
    </form>

    <h2>PRODUTOS</h2>
    <hr>
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
</html>