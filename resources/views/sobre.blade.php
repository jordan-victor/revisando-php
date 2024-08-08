<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
</head>
<body>
    <h1>Sobre</h1>
    @include('layouts.navbar')
    <hr>

    <p>{{$nome}}</p>



    <p>{{count($produtos)}}</p>
   

    @foreach($produtos as $produto)
        <p>{{$produto->preco}}</p>
        @isset
        <hr>
    @endforeach

    <hr>
    <p>{{$param}}</p>
    @foreach($lista as $elemento)
        @if($elemento < 10)
            <p>{{$elemento}}</p>
        @else
            <p>Elemento maior que 10</p>
        @endif   
    @endforeach
</body>
</html>