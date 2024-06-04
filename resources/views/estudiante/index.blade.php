<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>
    

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary vh-100 sidebar collapse">
                <div class="d-flex flex-column h-100 pt-3 pb-3">
                    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none"></a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ route('estudiante.create') }}" class="nav-link active">
                                <button class="btn btn-primary w-100 text-start">+ NUEVO</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <button class="btn btn-primary w-100 text-start">ESTUDIANTES</button>
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" >
                <div class="col-sm-8">
                    <div class="card-body" >
                        <div class="col-8" style="width: 150%">
                            <div class="card-body m-4 align-center">
                                <table class="table table-bordered table-hover table-responsive" id="detalles">
                                    <h3 class="text-center p-3">Lista de Estudiantes</h3>
                                    <thead class="table-dark table-responsive">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Carnet</th>
                                            <th>Edad</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($estudiantes as $estudiante)
                                        <tr class="text-center">
                                            <td>{{$estudiante->id}}</td>
                                            <td>{{$estudiante->nombre}}</td>
                                            <td>{{$estudiante->carnet}}</td>
                                            <td>{{$estudiante->edad}}</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Acciones">
                                                    <a href="{{ route('estudiante.edit', $estudiante->id) }}" style="margin-right: 10px;">
                                                        <button class="edit_estudiante btn btn-warning btn-sm">Editar</button>
                                                    </a>
                                                    <form action="{{ route('estudiante.destroy', $estudiante->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="delete_estudiante btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    

                                    </tbody>
                                </table>
                                <div class="text-end">
                                    <a href="/pdf" class="btn btn-danger" target="blank">Exportar a PDF</a>
                                    <a href="/correo" class="btn btn-secondary">Enviar por Correo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
