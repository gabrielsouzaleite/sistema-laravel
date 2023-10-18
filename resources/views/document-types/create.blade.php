<x-layout title="Novo tipo de documento">
    <div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
        <x-document-types.form action="{{ route('document-types.store') }}" type="{{ old('type') }}" :update="false" />
    </div>
    </div>
</x-layout>
