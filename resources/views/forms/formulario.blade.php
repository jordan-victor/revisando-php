@extends('layouts.padrao')

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif

    @if($errors->has('nome'))
        <p>{{$errors->first('nome')}}</p>
    @endif
    

    @component('components.form', ['data'=>date("d/m/Y")])
        <p>Arquivo transferido com sucesso</p>
    @endcomponent
@endsection
