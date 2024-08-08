@extends('layouts.padrao')

@section('content')
    <h1>Home</h1>
    @include('layouts.navbar')
    <hr>

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

@endsection