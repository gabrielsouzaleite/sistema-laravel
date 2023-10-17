@extends('components.layout')

@section('title', 'Cadastrar Departamento')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
<form action="{{ route('departments.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="department_name" class="form-label">
            Nome do Departamento
        </label>
        <input
            type="text"
            name="department_name"
            id="department_name"
            class="form-control"
            required
        />
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
</div>

@endsection
