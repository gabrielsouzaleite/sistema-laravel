<x-layout title="Novo Status">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-user-status.form action="{{ route('users-status.store') }}" statusName="{{ old('statusName') }}" :update="false" />
        </div>
    </div>
</x-layout>
