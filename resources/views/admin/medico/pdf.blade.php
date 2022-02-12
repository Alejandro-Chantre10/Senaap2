<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <header>
        <h1>dfdf</h1>
    </header>

        <div class="card">
            <div class="card-header text-center">
                <p class="text-bold">REGISTRO DE MEDICOS</p>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>EDAD</th>
                            <th>ESPECIALIDAD</th>
                            <th>APRENDIZ</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

</body>

</html>
