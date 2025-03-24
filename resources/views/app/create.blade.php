@extends('app.layout')
@section('content')
<h1>Cadastro</h1>
<form action="{{ route('app.store') }}" method="POST">
    {!! @csrf_field() !!}

    <label>Nome</label>
    <input type="text" name="name" id="" class="form-control"><br>
    <label>Endereço</label>
    <input type="text" name="endereco" id="" class="form-control"><br>
    <label>Telefone</label>
    <input type="text" name="telefone" id="" class="form-control"><br>
    <input type="submit" value="CADASTRAR" class="btn btn-success">
</form>

@endsection
