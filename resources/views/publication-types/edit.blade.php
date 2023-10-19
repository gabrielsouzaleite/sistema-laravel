<x-layout title="Editar Tipo de Publicação">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-publication-types.form action="{{ route('publication-types.update', $publicationType->id) }}" type="{{ $publicationType->type }}" :update="true"/>
        </div>
    </div>
</x-layout>
