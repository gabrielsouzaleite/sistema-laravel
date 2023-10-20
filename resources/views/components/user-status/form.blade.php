
 <form action="{{ $action }}" method="post" >
    @csrf
    @if ($update)
    @method('PUT')
    @endif

    <div class="mb-3" >
        <label for="status_name" class="form-label">
            Nome do Status
        </label >
        <input
            type="text"
            name="status_name"
            id="status_name"
            class="form-control"
            @isset($statusName)
            value="{{ $statusName }}"
            @endisset
    />
    </div>
    <button type="submit" class="btn btn-primary"> Salvar </button>
    </form >
