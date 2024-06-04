<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>



    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary vh-100 sidebar collapse">
                <div class="d-flex flex-column h-100 pt-3 pb-3">
                    <a href="#"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none"></a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ route('estudiante.create') }}" class="nav-link active">
                                <button class="btn btn-primary w-100 text-start">+NUEVO</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:history.back()" class="nav-link active">
                                <button class="btn btn-primary w-100 text-start">ESTUDIANTES</button>
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-7 px-md-4 mt-5">

                <div class="container">
                    <div class="row">

                        <div class="col-sm-5">
                            <!--<H3 class="text-center">INVESTIGACIÓN APLICADA</H3>-->
                            <div class="card">
                                <div class="card-header">Crear nuevo estudiante</div>
                                <div class="card-body">
                                    <form action="{{ route('estudiante.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="mb-2">Nombre</label>
                                                    <input type="text" name="nombre" id="nombre" required
                                                        class="form-control">

                                                    <label class="mb-2">Carnet</label>
                                                    <input type="text" name="carnet" id="carnet" required
                                                        class="form-control">

                                                    <label class="mb-2">Edad</label>
                                                    <input type="number" name="edad" id="edad" required
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-star">
                                            <button type="submit" class="btn btn-success">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>

        </main>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVFQWjxhNqjvET+saZCTsxzDVe8jj4i1nEE6SQxqEHcwqIhOqzwI" crossorigin="anonymous">
    </script>
</body>

</html>
