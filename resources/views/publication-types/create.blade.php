<x-layout title="Novo tipo de publicação">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-publication-types.form action="{{ route('publication-types.store') }}" type="{{ old('type') }}" :update="false" />
        </div>
    </div>
</x-layout>
