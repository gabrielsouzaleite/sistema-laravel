@extends('components.layout')

@section('title', 'Cadastrar Cargo')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 border rounded shadow p-3 m-3">
        <x-offices.form action="{{ route('offices.store') }}" officeName="{{ old('job_name') }}" :update="false"/>
</div>
</div>

@endsection
