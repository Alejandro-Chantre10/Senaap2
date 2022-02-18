@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h2>LISTA DE APRENDICES</h2>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="alert alert-danger">
            <strong>{{ session('mensaje') }}</strong>
        </div>
    @endif
    <div class="card-header">
        <a href="{{ route('aprendiz.create') }}" class="btn btn-info" style="background-color: #0A2A55;">Nuevo Aprendiz</a>
    </div>
    <div class="card"  style="background-color: #010611e1;">
        <div class="card-body">
            <table id="aprendiz" class="table table-dark shadow-lg mt-4">
                <thead class="text-bold" style="background-color: #0A2A55;">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>EDAD</th>
                        <th>TIPO DE DOCUMENTO</th>
                        <th>NUMERO DE DOCUMENTO</th>
                        <th>FICHA</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aprendices as $aprendiz)
                        <tr>
                            <td>{{ $aprendiz->id }}</td>
                            <td>{{ $aprendiz->nombre }}</td>
                            <td>{{ $aprendiz->apellido }}</td>
                            <td>{{ $aprendiz->edad }}</td>
                            <td>{{ $aprendiz->tipoD }}</td>
                            <td>{{ $aprendiz->numeroD }}</td>
                            <td>{{ $aprendiz->ficha }}</td>
                            <td width="200px">
                                <form action="{{ route('aprendiz.destroy', $aprendiz) }}" method="POST">
                                    <a href="{{ route('aprendiz.edit', $aprendiz) }}" class="btn btn-info">Editar</a>
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- Datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="
        https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#aprendiz').DataTable({
                "language": {
                    "search": "Buscar",
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente",
                        "first": "Primero",
                        "last": "Último"
                    }
                }
            });
        });
    </script>
@endsection
