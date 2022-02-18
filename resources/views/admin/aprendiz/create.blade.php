@extends('adminlte::page')
@section('title', 'Nuevo Aprendiz')

@section('content_header')
    <h1>Nuevo Aprendiz</h1>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="alert alert-success">
            <strong>{{ session('mensaje') }}</strong>
        </div>
    @endif
    <div class="card" style="background-color: #010611e1;">
        <div class="card-body">
            {!! Form::open(['route' => 'aprendiz.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'palceholder' => 'Nombre del Aprendiz']) !!}
                @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('apellido', 'Apellido') !!}
                {!! Form::text('apellido', null, ['class' => 'form-control', 'palceholder' => 'Nombre del Aprendiz']) !!}
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
                {!! Form::label('tipoD', 'Tipo de documento') !!}
                {!! Form::text('tipoD', null, ['class' => 'form-control']) !!}
                @error('tipoD')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('numeroD', 'Número de documento') !!}
                {!! Form::number('numeroD', null, ['class' => 'form-control']) !!}
                @error('numeroD')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('ficha', 'Ficha') !!}
                {!! Form::number('ficha', null, ['class' => 'form-control']) !!}
                @error('ficha')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Guardar aprendiz', ['class' => 'btn btn-info', 'id' => 'boton']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop
@section('css')
    <style>
        #boton {
            background-color: #0A2A55;
        }

        .form-control {
            width: 500px;
        }

    </style>
@endsection
