@extends('adminlte::page')
@section('title','Nuevo Usuario')

@section('content_header')
<h1>Nuevo Usuario</h1>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <strong>{{ session('mensaje') }}</strong>
</div>

@endif
<div class="card"  style="background-color: #010611e1;">
    <div class="card-body">
    {!! Form::open(['route'=>'user.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre',)!!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email',)!!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password',)!!}
            {!! Form::text('password', null, ['class'=>'form-control']) !!}
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {!! Form::submit('Guardar usuario',['class' =>'btn btn-info','id'=>'boton']) !!}
    {!! Form::close() !!}
    </div>

</div>
@stop

@section('css')
<style>
#boton{
    background-color: #0A2A55;
}

.form-control{
 width: 500px;
}
</style>
@endsection
