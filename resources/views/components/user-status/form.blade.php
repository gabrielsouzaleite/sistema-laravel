
 <form action="{{ $action }}" method="post" >
    @csrf
    @if ($update)
    @method('PUT')
    @endif

    <div class="mb-3" >
        <label for="statusName" class="form-label">
            Nome do Status
        </label >
        <input
            type="text"
            name="statusName"
            id="statusName"
            class="form-control"
            @isset($statusName)
            value="{{ $statusName }}"
            @endisset
    />
    </div>
    <button type="submit" class="btn btn-primary"> Salvar </button>
    </form >
