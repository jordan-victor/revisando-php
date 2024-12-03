{{$slot}}
{{$data}}

<h1>CADASTRO</h1>
<form action="{{route('sendValues')}}" method="POST" target="_blanck">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{old('nome')}}">
    <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
    <input type="number" name="telefone" placeholder="Telefone" value="{{old('telefone')}}">
    <br><br>

    <input type="submit" value="Enviar">
</form>

