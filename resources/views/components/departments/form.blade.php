<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif

    <div class="mb-3">
        <label for="department_name" class="form-label">
            Nome do Departamento
        </label>
        <input
            type="text"
            name="department_name"
            id="department_name"
            class="form-control"
            @isset($departmentName)
                value="{{ $departmentName }}"
            @endisset
        />
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
