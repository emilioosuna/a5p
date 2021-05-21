@extends('layouts.dashboard')
@section('pageheader')
    Roles Sistema
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card card">
             <div class="card-header bg-black">Crear Roles
                    <div class="float-right">
                        <a href="{{ route('roles.index') }}">
                            <img src="{{ asset('adminlte/icons/back.png') }}" width="48px" title="volver"></a>
                    </div>
             </div>
            <div class="card-body">
                @include('shared._errors')
                @include('shared._flashmessages')
                {{ Form::open(['route' => 'roles.store']) }}

                @include('roles.partials.form')

                {{ Form::close() }}
            </div>

        </div>
    </div>
@endsection
