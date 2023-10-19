<x-layout title="Status">
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-primary" href="{{ route('users-status.create') }}">Criar</a>
        </div>

        @isset($mensagemSucesso)
            <x-mensagem-sucesso mensagemSucesso="{{ $mensagemSucesso }}" />
        @endisset

        <div class="col-md-3">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <ul class="list-group">

                @foreach ($allStatus as $status)

                <li class="list-group-item d-flex justify-content-between">
                    <div class="row">
                        <p>
                            <strong> {{ $status->status_name }} </strong>
                        </p>
                        <span class="d-flex gap-2">
                            <a href="{{ route('user-status.edit', $status->id) }}" class="btn btn-info btn-sm">
                                Alterar
                            </a>
                            <form action="{{ route('user-status.destroy', $status->id) }}" method="post">
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
