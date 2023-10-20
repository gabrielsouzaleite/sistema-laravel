<x-layout title="Cadastro de Usuário">
    <div class="row justify-content-center">
        <div class="col-md-6 border rounded shadow p-3 m-3">
            <x-users.form :action="route('users.store')" :update="false" :departments="$departments" :offices="$offices" :allStatus="$allStatus" :levels="$levels"/>
        </div>
    </div>
</x-layout>
