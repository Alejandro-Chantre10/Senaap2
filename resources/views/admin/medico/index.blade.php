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
        <div>
            @can('medico.create')
                <a href="{{ route('medico.create') }}"class="btn btn-info" style="background-color: #0A2A55;">Nuevo medico</a>
            @endcan
        </div>
        <div class="button">
            <div class="container">
                <a href="{{ route('admin/medico.pdf') }}"><span class="tick">PDF</span></a>
            </div>
        </div>
    </div>

    <div class="card"  style="background-color: #010611e1;">
        <div class="card-body">
            <table id="medico" class="table table-dark shadow-lg mt-4">
                <thead class="text-bold"  style="background-color: #0A2A55;">
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
                            <td>{{ $medico->aprendiz->nombre }}</td>

                            <td width="200px">
                                @can('medico.destroy')
                                    <form action="{{ route('medico.destroy', $medico) }}" method="POST">

                                        @can('medico.edit')
                                            <a href="{{ route('medico.edit', $medico) }}" class="btn btn-info">Editar</a>
                                        @endcan
                                        @method('delete')
                                        @csrf
                                        <input type="submit" value="Eliminar" class="btn btn-danger">
                                    </form>
                                @endcan
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

    <style>
        .button,
        .tick {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            font-family: sans-serif;
        }

        .button {
            width: 120px;
            height: 40px;
            background: dodgerblue;
            border-radius: 6px;
            transition: all .3s cubic-bezier(0.67, 0.17, 0.40, 0.83);
            margin-left: 20px;
        }

        .button svg {
            transform: rotate(180deg);
            transition: all .5s;
        }

        .button__circle {
            width: 50px;
            height: 50px;
            background: mediumseagreen;
            border-radius: 50%;
            transform: rotate(-180deg);
        }

        .button:hover {
            cursor: pointer;
        }

        .tick {
            color: black;
            font-size: 1em;
            font-family: bold;
            transition: all .9s;

        }

        .card-header {
            display: flex;
        }

    </style>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="
                                                        https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js">
    </script>
    <script>

        //DataTable
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


        //BOTONES
        let button = document.querySelector('.button');
        let buttonText = document.querySelector('.tick');

        const tickMark =
            "<svg width=\"58\" height=\"45\" viewBox=\"0 0 58 45\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"#fff\" fill-rule=\"nonzero\" d=\"M19.11 44.64L.27 25.81l5.66-5.66 13.18 13.18L52.07.38l5.65 5.65\"/></svg>";

        buttonText.innerHTML = "PDF";

        button.addEventListener('click', function() {

            if (buttonText.innerHTML !== "PDF") {
                buttonText.innerHTML = "PDF";
            } else if (buttonText.innerHTML === "PDF") {
                buttonText.innerHTML = tickMark;
            }
            this.classList.toggle('button__circle');
        });
    </script>
@endsection
