<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registro Alumnos</title>
</head>



<style type="text/css">


    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: linear-gradient(to right, #cdb4db, #a2d2ff);
    }

    form {
        display: flex;
        flex-direction: column;
        background: #fff;
        text-align: center;
        padding: 20px 25px;
        box-shadow: 0 5px 10px rgba(71, 3, 6, 0.7);
    }

    form .title {
        color: #252525;
        font-size: 35px;
        font-weight: 800;
        margin-bottom: 30px;
    }

    form label {
        margin-bottom: 35px;
    }

    form label .fa-solid {
        font-size: 20px;
        color: #cb232c;
        margin-right: 10px;
    }

    form label input {
        outline: none;
        border: none;
        color: #252525;
        border-bottom: solid 1px #ce1d61;
        padding: 0 5px;
        font-size: 18px;
    }

    form label input::placeholder {
        color: rgba(37, 37, 37, 0.5);
    }


    form .link {
        color: #252525;
        margin-bottom: 15px;
    }

    form button {
        color: #fff;
        border: none;
        background: linear-gradient(to right, #cb232c, #ce1d61);
        padding: 10px 15px;
        cursor: pointer;
        font-size: 20px;
    }


</style>

<body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interfaz</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/interfaz.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <!-- Estilos Propios -->
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap"
          rel="stylesheet">

</head>
<body>
<h1 class="text-center p-3">Registro Alumnos</h1>
@if(session("correcto"))
    <div class="alert alert-success">{{session("correcto")}}</div>
@endif

@if(session("incorrecto"))
    <div class="alert alert-danger">{{session("incorrecto")}}</div>
@endif
<div class="p-5 table-responsive">
    <!-- Modal de registrar-->
    <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Catedrático</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('alumno.create')}}" method="POST">
                        @csrf
                        <div class="form-group row mb-3">
                  
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-5 col-form-label">Nombre</label>
                            <div class="col-sm-7">
                                <input type="text" name="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-5 col-form-label">Correo</label>
                            <div class="col-sm-7">
                                <input type="email" name="Correo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-5 col-form-label">Teléfono</label>
                            <div class="col-sm-7">
                                <input type="number" name="Telefono" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#modalRegistrar">
        Nuevo Alumno
    </button>

    <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary text-white">
        <tr>
            <th class="align-middle">Código Registro</th>
            <th class="align-middle">Nombre Alumno</th>
            <th class="align-middle">Correo Institucional</th>
            <th class="align-middle">Teléfono</th>

        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($alumnos as $Alumno)
            <tr>
                <td>{{$Alumno->Carne}}</td>
                <td>{{$Alumno->Nombre_Alumno}}</td>
                <td>{{$Alumno->Correo_institucional}}</td>
                <td>{{$Alumno->Telefono}}</td>

                <td>
                    <a href="" class="btn btn-warning"
                       data-bs-toggle="modal" data-bs-target="#modalEditar{{$Alumno->Carne}}">
                        <i class='bx bxs-edit'></i>
                    </a>
                    <!-- Formulario de Eliminar -->
                    <form> action="{{ route('$Alumno.delete', $Alumno->Nombre_Alumno) }}" method="POST"

                    </form>
                </td>

                <!-- Modal de editar -->
                <div class="modal fade" id="modalEditar{{$Alumno->Correo_institucional}}" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Alumno</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('$Alumno.update', $Alumno->Carne) }}"
                                      method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group row mb-3">
                                        <label class="col-sm-5 col-form-label">Código Alumno</label>
                                        <div class="col-sm-7">
                                            <input type="number" name="Codigo_Catedratico" class="form-control"
                                                   value="{{$Alumno->Carne}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-sm-5 col-form-label">Nombre</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="Nombre" class="form-control"
                                                   value="{{$Alumno->Nombre_Alumno}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-sm-5 col-form-label">Correo</label>
                                        <div class="col-sm-7">
                                            <input type="email" name="Correo" class="form-control"
                                                   value="{{$Alumno->Correo_institucional}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-sm-5 col-form-label">Telefono</label>
                                        <div class="col-sm-7">
                                            <input type="number" name="Telefono" class="form-control"
                                                   value="{{$Alumno->Telefono}}">
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar
                                        </button>
                                        <button type="submit" class="btn btn-primary">Modificar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var deleteForms = document.querySelectorAll('.delete-form');
        deleteForms.forEach(function (form) {
            form.addEventListener('submit', function (event) {
                var confirmation = confirm('¿Está seguro de que desea eliminar este registro?');
                if (!confirmation) {
                    event.preventDefault();
                }
            });
        });
    });
</script>


</body>
</html>


</body>
</html>
