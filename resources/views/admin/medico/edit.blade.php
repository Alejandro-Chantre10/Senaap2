@extends('adminlte::page')
@section('title', 'Nuevo medico')

@section('content_header')
    <h1>Editar datos del medico {{ $medico->nombre }}</h1>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="alert alert-success">
            <strong>{{ session('mensaje') }}</strong>
        </div>

    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($medico, ['route' => ['medico.update', $medico], 'method' => 'put']) !!}
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

            {!! Form::submit('Actualizar médico') !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop
