@extends('components.layout')

@section('title', 'Editar Departamento')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
    <x-departments.form action="{{ route('departments.update', $department->id) }}" departmentName="{{ $department->department_name }}" :update="true"/>
</div>
</div>

@endsection
