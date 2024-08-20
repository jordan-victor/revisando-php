@extends('layouts.padrao')
@section('content')

@section('h1', 'REGISTROS')

@foreach($registros as $registro)
    <p>Nome: {{$registro->profissional}}</p>
    <p>CPF: {{$registro->cpf}}</p>
    <hr>
@endforeach

@foreach($resultados as $resultado)
    <p style="color:blue">{{$resultado->profissional}}</p>
@endforeach

@endsection