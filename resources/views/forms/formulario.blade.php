@extends('layouts.padrao')

@section('content')
    @component('components.form', ['data'=>date("d/m/Y")])
        <p>Arquivo transferido com sucesso</p>
    @endcomponent
@endsection
