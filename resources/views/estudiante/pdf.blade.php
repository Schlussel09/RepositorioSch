<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exportar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>

        .cabeceraTabla{
            background-color: rgb(31, 30, 30);
            color: white;
            padding: 50px;
        }

        .table{
            background-color: rgb(189, 189, 189);
        }

        th,td{
            border:solid 1px rgb(207, 207, 207);
            padding: 5px;
        }

    </style>

</head>
<body>

    <h2 class="text-center">Estudiantes</h2>
    <hr>
    <table class="table table-bordered table-hover table-responsive text-center" id="detalles">
        <thead class="cabeceraTabla">
            <tr class="text-center">
                <th>ID</th>
                <th>Nombre</th>
                <th>Carnet</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{$estudiante->id}}</td>
                <td>{{$estudiante->nombre}}</td>
                <td>{{$estudiante->carnet}}</td>
                <td>{{$estudiante->edad}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    
</body>
</html>