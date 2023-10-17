@extends('components.layout')

@section('title', 'Cadastrar Cargo')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
<form action="{{ route('offices.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="office_name" class="form-label">
            Nome do Cargo
        </label>
        <input
            type="text"
            name="job_name"
            id="office_name"
            class="form-control"
            required
        />
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
</div>

@endsection
