@extends('components.layout')
@section('title', 'Usuários')

@section('content')
<div class="row">
    <div class="col-md-3">
        <a class="btn btn-primary" href="{{ route('users.create') }}">Criar</a>
    </div>
</div>
<br />
<div class="row justify-content-center">
    <div class="col-md-6">
        <ul class="list-group">
            @foreach ($users as $user)

            <li class="list-group-item d-flex justify-content-between">
            <div class="row">
                <p>
                    <strong> {{ $user->user_name }} </strong>
                </p>
                <span class="d-flex gap-2">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">
                        Alterar
                    </a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
@endsection
