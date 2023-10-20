
 <form action="{{ $action }}" method="post" >
    @csrf
    @if ($update)
    @method('PUT')
    @endif

    <div class="mb-3" >
        <label for="level_name" class="form-label">
            Nome do Status
        </label >
        <input
            type="text"
            name="level_name"
            id="level_name"
            class="form-control"
            @isset($levelName)
            value="{{ $levelName }}"
            @endisset
    />
    </div>
    <button type="submit" class="btn btn-primary"> Salvar </button>
    </form >
