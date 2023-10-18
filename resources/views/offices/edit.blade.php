<x-layout title="Editar Cargo">
<div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
        <x-offices.form action="{{ route('offices.update', $office->id) }}" officeName="{{ $office->job_name }}" :update="true" />
</div>
</div>

</x-layout>
