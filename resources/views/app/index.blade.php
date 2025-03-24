@extends('app.layout')
@section('content')
<h1>Home</h1>


<a href="{{ route('app.create') }}" class="btn btn-info">NOVO</a>
<table class="table sm container">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->mobile }}</td>
                <td>
                    <a href="{{ url('/student/' . $student->id) }}">Visualizar</a>
                    <a href="{{ url('/student/' . $student->id . '/edit') }}" class="btn btn-info">Editar</a>
                    <form action="{{ url('/students' . $student->id)}}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ @csrf_field() }}
                        <button type="submit" class="btn btn-danger">REMOVER</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
