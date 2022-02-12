@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Calendario</h1>
        <div>
            <a href="{{ route('evento.pdf') }}" class="btn btn-primary">PDF</a>
        </div>
        <div id="agenda"></div>
    </div>
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#evento">
        Launch
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Asignar control</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open() !!}
                    <div class="form-group">
                        {!! Form::label('id', 'ID') !!}
                        {!! Form::text('id', null, ['class' => 'form-control', 'palceholder' => 'Nombre del id_medico']) !!}
                        @error('id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('title', 'Titulo') !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'palceholder' => 'Nombre del id_medico']) !!}
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                        {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'palceholder' => 'Nombre del id_medico']) !!}
                        @error('descripcion')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('start', 'Incio') !!}
                        {!! Form::date('start', null, ['class' => 'form-control', 'palceholder' => 'Nombre del id_medico']) !!}
                        @error('start')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('end', 'Fin') !!}
                        {!! Form::date('end', null, ['class' => 'form-control', 'palceholder' => 'Nombre del id_medico']) !!}
                        @error('end')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('id_aprendiz', 'Seleccione el aprendiz') !!}
                        {!! Form::select('id_aprendiz', $aprendices, null, ['class' => 'form-control']) !!}
                        @error('id_aprendiz')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('id_medico', 'Seleccione el médico') !!}
                        {!! Form::select('id_medico', $medicos, null, ['class' => 'form-control']) !!}
                        @error('id_medico')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="guardar"
                        name="guardar">Guardar</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="actualizar"
                        name="actualizar">Actualizar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="eliminar"
                        name="elminar">Eliminar</button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
@endsection
