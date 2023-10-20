<x-layout title="Editar Nível">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-user-levels.form action="{{ route('levels.update', $level->id) }}" levelName="{{ $level->level_name }}" :update="true"/>
        </div>
    </div>
</x-layout>
