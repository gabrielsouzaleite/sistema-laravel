<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label for="office_name" class="form-label">
            Nome do Cargo
        </label>
        <input
            type="text"
            name="job_name"
            id="office_name"
            class="form-control"
            @isset($officeName)
            value="{{ $officeName }}"
            @endisset
        />
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
