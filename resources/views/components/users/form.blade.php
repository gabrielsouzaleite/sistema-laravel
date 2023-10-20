@props(['departments', 'offices', 'action', 'update', 'user', 'allStatus', 'levels'])
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
            @isset($user->id)
            value="{{ $user->user_name }}"
            @endisset
            required
        />
    </div>
    <div class="mb-3">
        <label for="login" class="form-label"> E-mail de Login </label>
        <input
            type="email"
            name="email"
            id="email"
            class="form-control"
            @isset($user->id)
            value="{{ $user->email }}"
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
                @isset($user->id)
                    value="{{ $user->birth_date }}"
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
            <label for="status_id" class="form-label">
                Status do usuario
            </label>
            <select name="status_id" id="status_id" class="form-select">
                @isset($user->id)
                    <option value="{{ $user->user_status }}"> {{ $user->status->status_name }} </option>
                @endisset
                @foreach ($allStatus as $status)
                    <option value="{{ $status->id }}"> {{ $status->status_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="user_level" class="form-label"> Nivel do usuario </label>
            <select name="user_level" id="user_level" class="form-select">
                @isset($user->id)
                    <option value="{{ $user->user_level }}"> {{ $user->level->level_name }} </option>
                @endisset
                @foreach ($levels as $level)
                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="department_id" class="form-label"> Departamento </label>
            <select name="department_id" id="department_id" class="form-select">
                @isset($user->id)
                    <option value="{{ $user->department_id }}"> {{ $user->department->department_name }} </option>
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
                @isset($user->id)
                    <option value="{{ $user->office_id }}"> {{ $user->office->job_name }} </option>
                @endisset
                    @foreach ($offices as $office)
                    <option value="{{ $office->id }}">{{ $office->job_name}}</option>
                    @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
