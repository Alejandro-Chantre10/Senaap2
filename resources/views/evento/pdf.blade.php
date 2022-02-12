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
    <div class="card">
        <div class="card-header text-center">
            <p class="text-bold">REGISTRO DE CONTROLES</p>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th>ID</th>
                        <th>TITULO</th>
                        <th>DESCRIPCION</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>APRENDIZ</th>
                        <th>MEDICO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventos as $evento)
                        <tr>
                            <td>{{ $evento->id }}</td>
                            <td>{{ $evento->title }}</td>
                            <td>{{ $evento->descripcion }}</td>
                            <td>{{ $evento->start }}</td>
                            <td>{{ $evento->end }}</td>
                            <td>{{ $evento->aprendiz->nombre }}</td>
                            <td>{{ $evento->medico->nombre}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
