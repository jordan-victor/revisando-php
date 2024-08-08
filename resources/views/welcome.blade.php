<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ex01</h1>
    @include('layouts.navbar')
    <form action="/" method="get">
        @csrf
        <input type="text" name="texto" id="texto">
        <input type="submit" value="ENVIAR">
    </form>

    <hr>
    @if(count($array) == 10)
        @foreach($array as $item)
            <p>{{$item}}</p>
        @endforeach

    @elseif(count($array) < 10)
        <p>{{$array[0]}}</p>

    @else
        <p>{{$usuarios['user']['nome']}}</p>
    @endif
    



    {{--função isset--}}
    @isset($teste)
        {{$teste}}
    @endisset





    {{--função unless--}}
    @unless(10 < 6)
        <p>10 é maior que 6</p>
    @endunless




    {{--função empty--}}
    @empty($indefinida)
        <p>Vazio</p>
    @endempty




    {{--função for--}}
    @for($i = 0; $i < count($array); $i++)
        <p>{{$array[$i]}} - {{$i}}</p>
    @endfor



    {{--Operador condicional ternário--}}
    
</body>
</html>