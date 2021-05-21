@extends('layouts.dashboard')
@section('pageheader')
    Roles Sistema
@endsection
@section('content')
<div class="col-md-12">
    <div class="card card">
        <div class="card-header bg-black">Editar Roles
        <div class="float-right">
            <a href="{{ route('roles.index') }}">
                <img src="{{ asset('adminlte/icons/back.png') }}" width="48px" title="volver"></a>
            </div>
        </div>
        <div class="card-body">
            {!! Form::model($role, ['route' => ['roles.update', $role->id],
            'method' => 'PUT']) !!}
            @include('roles.partials.form')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
