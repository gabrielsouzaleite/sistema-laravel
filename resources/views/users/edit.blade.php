<x-layout title="Editar Usuário">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-users.form action="{{ route('users.update', $user->id) }}" :user="$user" :update="true" :departments="$departments" :offices="$offices" :allStatus="$allStatus" :levels="$levels"/>
        </div>
    </div>
</x-layout>
