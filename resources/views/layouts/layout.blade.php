@extends('adminlte::page')

@section('title','Admin')

@section('content_header')

@stop

@section('content')

<body classbackground="/image/fondo.jpg">
    <div class="main">
        <h1 class="text-center">Bienvenido de vuelta {{ Auth::user()->name }}</h1>
    </div>

</body>
@stop

@section('css')
<link rel="stylesheet" href="css\style.css">
<style type="text/css">
</style>

@stop

@section('js')
@stop