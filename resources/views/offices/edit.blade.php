@extends('components.layout')

@section('title', 'Editar Cargo')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
<form action="{{ route('offices.update', $office->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="job_name" class="form-label">
            Nome do Cargo
        </label>
        <input
            type="text"
            name="job_name"
            id="job_name"
            class="form-control"
            value="{{ $office->job_name }}"
            required
        />
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
</div>

@endsection
