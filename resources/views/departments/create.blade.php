@extends('components.layout')

@section('title', 'Cadastrar Departamento')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
    <x-departments.form action="{{ route('departments.store') }}" departmentName="{{ old('department_name') }}" :update="false"/>
</div>
</div>

@endsection
