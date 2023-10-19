<x-layout title="Editar Tipo de Documento">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-document-types.form action="{{ route('document-types.update', $documentType->id) }}" type="{{ $documentType->type }}" :update="true"/>
        </div>
    </div>
</x-layout>
