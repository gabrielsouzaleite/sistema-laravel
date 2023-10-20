<x-layout title="Nível">
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-primary" href="{{ route('levels.create') }}">Criar</a>
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

                @foreach ($allLevels as $level)

                <li class="list-group-item d-flex justify-content-between">
                    <div class="row">
                        <p>
                            <strong> {{ $level->level_name }} </strong>
                        </p>
                        <span class="d-flex gap-2">
                            <a href="{{ route('levels.edit', $level->id) }}" class="btn btn-info btn-sm">
                                Alterar
                            </a>
                            <form action="{{ route('levels.destroy', $level->id) }}" method="post">
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
