<x-layout title="Editar Status">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-user-status.form action="{{ route('user-status.update', $status->id) }}" statusName="{{ $status->status_name }}" :update="true"/>
        </div>
    </div>
</x-layout>
