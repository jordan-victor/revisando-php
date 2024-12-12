{{$slot}}
{{$data}}

<h1>CADASTRO</h1>
<form action="{{route('sendValues')}}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{old('nome')}}">
    <div>
        {{$errors->has('nome') ? $errors->first('nome') : ''}}
    </div> <br>

    <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
    <div>
        {{$errors->has('email') ? $errors->first('email') : ''}}
    </div> <br>

    <input type="number" name="telefone" placeholder="Telefone" value="{{old('telefone')}}">
    <div>
        {{$errors->has('telefone') ? $errors->first('telefone') : ''}}
    </div>
    <br><br>

    <input type="submit" value="Enviar">
</form>

