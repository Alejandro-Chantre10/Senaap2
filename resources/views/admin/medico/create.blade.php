@extends('adminlte::page')
@section('title', 'Nuevo Medico')

@section('content_header')
    <h1>Nuevo Médico</h1>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="alert alert-success">
            <strong>{{ session('mensaje') }}</strong>
        </div>
    @endif
    <div class="card fondo1" style="background-color: #010611e1;">
        <div class="card-body">
            {!! Form::open(['route' => 'medico.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'palceholder' => 'Nombre del medico']) !!}
                @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('apellido', 'Apellido') !!}
                {!! Form::text('apellido', null, ['class' => 'form-control', 'palceholder' => 'Nombre del medico']) !!}
                @error('apellido')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('edad', 'Edad') !!}
                {!! Form::number('edad', null, ['class' => 'form-control']) !!}
                @error('edad')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('especialidad', 'Especialidad') !!}
                {!! Form::text('especialidad', null, ['class' => 'form-control']) !!}
                @error('especialidad')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('aprendiz_id', 'Seleccione el aprendiz') !!}
                {!! Form::select('aprendiz_id', $aprendices, null, ['class' => 'form-control']) !!}
                @error('aprendiz_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Guardar médico', ['class' => 'btn btn-info', 'id' => 'boton']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop
@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        #boton {
            background-color: #0A2A55;
        }

        .form-control {
            width: 500px;
        }

    </style>
@endsection
