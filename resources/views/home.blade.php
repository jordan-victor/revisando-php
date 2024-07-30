<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <form action="/sobre" method="GET">
        @csrf
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="submit" value="Enviar">
    </form>


    <hr>
    @if(3>1)
        <p>{{$array[0]}}</p>
        <p>{{$array[1]}}</p>
        <p>{{count($array)}}</p>
        <h1>{{$nome . " Victor"}}</h1>
        <hr>
        <p>{{$usuario1->nome}}</p>
    @endif

    @foreach($array as $registro)
        <p>{{count($array)}} {{$usuario1->mostrarDados()}}</p>
    @endforeach

    <hr>
    @foreach($usuarios as $usuario)
        <p>{{$usuario->nome}} - {{$usuario->email}} - {{$usuario->idade}}</p>
    @endforeach
</body>
</html>