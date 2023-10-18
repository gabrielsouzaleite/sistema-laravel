<x-layout title="Editar Departamento">
<div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
    <x-departments.form action="{{ route('departments.update', $department->id) }}" departmentName="{{ $department->department_name }}" :update="true"/>
</div>
</div>
</x-layout>
