@extends('layouts.padrao')
@section('content')

@section('h1', 'REGISTROS')

@foreach($filtro as $prof)
    <p>{{$prof->cpf_prof}}</p>
@endforeach



@foreach($registros as $registro)
    <p>Nome: {{$registro->nome_prof}}</p>
    <p>CPF: {{$registro->cpf_prof}}</p>
    <hr>
@endforeach

@endsection