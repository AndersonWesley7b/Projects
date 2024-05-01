@extends('layouts.admin')

@section('content')
<h2>Listar cursos</h2>
<a href="{{ route('courses.show') }}">Visualizar</a>

<a href="{{ route('courses.create') }}">Cadastrar</a>
@endsection

