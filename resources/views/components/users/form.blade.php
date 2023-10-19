<form action="{{ $action }}" method="post">
    @csrf
    @if ($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label for="user_name" class="form-label"> Nome do Usuario </label>
        <input
            type="text"
            name="user_name"
            id="user_name"
            class="form-control"
            @isset($id)
            value="{{ $userName }}"
            @endisset
            required
        />
    </div>
    <div class="mb-3">
        <label for="login" class="form-label"> E-mail de Login </label>
        <input
            type="email"
            name="login"
            id="login"
            class="form-control"
            @isset($id)
            value="{{ $email }}"
            @endisset
            required
        />
    </div>
    <div class="mb-3">
        <label for="password" class="form-label"> Senha </label>
        <input
            type="password"
            name="password"
            id="password"
            class="form-control"
            required
        />
    </div>
    <div class="mb-3">
        <label for="user_photo" class="form-label"> Foto de perfil </label>
        <input
            type="file"
            name="user_photo"
            id="user_photo"
            class="form-control"
            accept="image/png, image/jpeg"
            required
        />
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="birth_date" class="form-label"> Data Aniversário </label>
            <input
                type="date"
                name="birth_date"
                id="birth_date"
                class="form-control"
                @isset($id)
                    value="{{ $birthDate }}"
                @endisset
                required
            />
        </div>
        <div class="col-md-6">
            <label for="hiring_date" class="form-label"
                >Data de Contratação</label
            >
            <input
                type="date"
                name="hiring_date"
                id="hiring_date"
                class="form-control"
                required
            />
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="user_status" class="form-label">
                Status do usuario
            </label>
            <select name="user_status" id="user_status" class="form-select">
                @isset($id)
                    <option value="{{ $userStatus }}"> {{ $statusName }} </option>
                @endisset
                <option value="0">Não definido</option>
                <option value="1">Ativo</option>
                <option value="2">Invativo</option>
                <option value="3">Licença</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="user_level" class="form-label"> Nivel do usuario </label>
            <select name="user_level" id="user_level" class="form-select">
                @isset($id)
                    <option value="{{ $userLevel }}"> {{ $levelName }} </option>
                @endisset
                <option value="0">Não definido</option>
                <option value="1">Padrão</option>
                <option value="2">Administrador</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="department_id" class="form-label"> Departamento </label>
            <select name="department_id" id="department_id" class="form-select">
                @isset($id)
                    <option value="{{ $userDepartment }}"> {{ $departmentName }} </option>
                @endisset
                {{-- {{ $departments = Department::query()->orderBy('department_name')->get() }} --}}
                @fragment('department-list')
                    @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                    @endforeach
                @endfragment
            </select>
        </div>
        <div class="col-md-6">
            <label for="office_id" class="form-label"> Cargo </label>
            <select name="office_id" id="office_id" class="form-select">
                @isset($id)
                    <option value="{{ $user_office }}"> {{ $office_name }} </option>
                @endisset
                @fragment('office-list')
                    @foreach ($offices as $office)
                    <option value="{{ $office->id }}">{{ $office->job_name}}</option>
                    @endforeach
                @endfragment
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
