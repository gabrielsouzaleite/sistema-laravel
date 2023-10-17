@extends('components.layout')
@section('title', 'Cargos')

@section('content')

<div class="row">
    <div class="col-md-3">
        <a class="btn btn-primary" href="{{ route('offices.create') }}">Criar</a>
    </div>
</div>
<br />
<div class="row justify-content-center">
    <div class="col-md-6">
        <ul class="list-group">
            @foreach ($offices as $office)

            <li class="list-group-item d-flex justify-content-between">
            <div class="row">
                <p>
                    <strong> {{ $office->job_name }} </strong>
                </p>
                <span class="d-flex gap-2">
                    <a href="{{ route('offices.edit', $office->id) }}" class="btn btn-info btn-sm">
                        Alterar
                    </a>
                    <form action="{{ route('offices.destroy', $office->id) }}" method="post">
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
