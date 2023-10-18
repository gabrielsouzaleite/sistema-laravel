<x-layout title="Tipos de documentos">
    <div class="row">
    <div class="col-md-3">
        <a class="btn btn-primary" href="{{ route('document-types.create') }}">Criar</a>
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
            @foreach ($documentTypes as $documentType)

            <li class="list-group-item d-flex justify-content-between">
            <div class="row">
                <p>
                    <strong> {{ $documentType->type }} </strong>
                </p>
                <span class="d-flex gap-2">
                    <a href="{{ route('document-types.edit', $documentType->id) }}" class="btn btn-info btn-sm">
                        Alterar
                    </a>
                    <form action="{{ route('document-types.destroy', $documentType->id) }}" method="post">
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
