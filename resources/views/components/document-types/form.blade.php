
 <form action="{{ $action }}" method="post" >
    @csrf
    @if ($update)
    @method('PUT')
    @endif

    <div class="mb-3" >
        <label for="type" class="form-label">
            Nome do Tipo de documento
        </label >
        <input
            type="text"
            name="type"
            id="type"
            class="form-control"
            @isset($type)
            value="{{ $type }}"
            @endisset
    />
    </div>
    <button type="submit" class="btn btn-primary"> Salvar </button>
    </form >
