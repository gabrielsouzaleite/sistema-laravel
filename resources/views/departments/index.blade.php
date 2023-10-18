<x-layout title="Departamentos">
<div class="row">
    <div class="col-md-3">
        <a class="btn btn-primary" href="{{ route('departments.create') }}">Criar</a>
    </div>

@isset($mensagemSucesso)

    <x-mensagem-sucesso mensagemSucesso="{{ $mensagemSucesso }}" />
    @endisset
    <div class="col-md-3">
    </div>
</div>
<br />
<div class="row justify-content-center">
    <div class="col-md-6">
        <ul class="list-group">
            @foreach ($departments as $department)

            <li class="list-group-item d-flex justify-content-between">
            <div class="row">
                <p>
                    <strong> {{ $department->department_name }} </strong>
                </p>
                <span class="d-flex gap-2">
                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-info btn-sm">
                        Alterar
                    </a>
                    <form action="{{ route('departments.destroy', $department->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit"
                        >
                            Excluir
                        </button>
                    </form>
                </span>
            </div>
        </li>
            @endforeach
</ul>
    </div>
</div>
</x-layout>
