<x-layout title="Tipos de Publicações">
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-primary" href="{{ route('publication-types.create') }}">Criar</a>
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

                @foreach ($publicationTypes as $publicationType)

                <li class="list-group-item d-flex justify-content-between">
                    <div class="row">
                        <p>
                            <strong> {{ $publicationType->type }} </strong>
                        </p>
                        <span class="d-flex gap-2">
                            <a href="{{ route('publication-types.edit', $publicationType->id) }}" class="btn btn-info btn-sm">
                                Alterar
                            </a>
                            <form action="{{ route('publication-types.destroy', $publicationType->id) }}" method="post">
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
