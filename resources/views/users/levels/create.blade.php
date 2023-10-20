<x-layout title="Novo Nível">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-user-levels.form action="{{ route('levels.store') }}" levelName="{{ old('level_name') }}" :update="false" />
        </div>
    </div>
</x-layout>
