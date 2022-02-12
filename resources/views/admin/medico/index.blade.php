@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h2>LISTA DE MEDICOS</h2>
@stop

@section('content')
    @if (session('mensaje'))
        <div class="alert alert-danger">
            <strong>{{ session('mensaje') }}</strong>
        </div>
    @endif
    <div class="card-header">
        <a href="{{ route('medico.create') }}" class="btn btn-success">Nuevo medico</a>
        <a href="{{ route('admin/medico.pdf') }}" class="btn btn-primary">PDF</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="medico" class="table table-striped shadow-lg mt-4">
                <thead class="bg-info text-bold">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>EDAD</th>
                        <th>ESPECIALIDAD</th>
                        <th>APRENDIZ</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicos as $medico)
                        <tr>
                            <td>{{ $medico->id }}</td>
                            <td>{{ $medico->nombre }}</td>
                            <td>{{ $medico->apellido }}</td>
                            <td>{{ $medico->edad }}</td>
                            <td>{{ $medico->especialidad }}</td>
                            <td>{{ $medico->aprendiz->nombre  }}</td>

                            <td width="200px">
                                <form action="{{ route('medico.destroy', $medico) }}" method="POST">
                                    <a href="{{ route('medico.edit', $medico) }}" class="btn btn-info">Editar</a>

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
            $('#medico').DataTable({
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
