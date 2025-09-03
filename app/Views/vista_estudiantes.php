<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="body-tables">
    <hr>
    <a href="<?=base_url('/')?>" class="btn btn-outline-info"><i class="bi bi-house-fill"></i> Inicio</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Estudiante
    </button>
    <br><br>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar Estudiantes</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--id-->
                    <form action="<?=base_url('agregarEstudiante')?>" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Carnet</span>
                            <input type="number" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" id="empleado_id" name="carne_alumno" >
                        </div>
                        <!--nombre-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="nombre" name="nombre"
                                placeholder="Nombre" aria-describedby="inputGroup-sizing-sm"  required>
                        </div>
                        <!--apellido-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="apellido" name="apellido"
                                placeholder="Apellido" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="direccion"
                                placeholder="Direccion" aria-describedby="inputGroup-sizing-sm" required> 
                        </div>
                        <!--fecha de nacimiento-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">telefono</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="fecha_nac" name="telefono"
                                placeholder="Fecha de Nacimiento" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                            <input type="email" class="form-control" aria-label="Sizing example input" id="fecha_nac" name="email"
                                placeholder="Fecha de Nacimiento" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de Nacimiento</span>
                            <input type="date" class="form-control" aria-label="Sizing example input" id="fecha_nac" name="fechanacimiento"
                                placeholder="Fecha de Nacimiento" aria-describedby="inputGroup-sizing-sm"  required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha de Nacimiento</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="fecha_nac" name="codigo_grado"
                                placeholder="Codigo de grado" aria-describedby="inputGroup-sizing-sm"  required>
                        </div>
                        <button type="submit" class="btn btn-outline-warning" id="add">Actualizar</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>
    <div class="container">
        <table class="table transparent-table">
        <thead>
            <tr>
                <th scope="col">Carne</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">direccion</th>
                <th scope="col">telefono</th>
                <th scope="col">email</th>
                <th scope="col">fecha nacimiento</th>
                <th scope="col">codigo grado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $estudiante){
                ?>
            <tr>
                <td><?=$estudiante['carne_alumno'];?></td>
                <td><?=$estudiante['nombre'];?></td>
                <td><?=$estudiante['apellido'];?></td>
                <td><?=$estudiante['direccion'];?></td>
                <td><?=$estudiante['telefono'];?></td>
                <td><?=$estudiante['email'];?></td>
                <td><?=$estudiante['fechanacimiento'];?></td>
                <td><?=$estudiante['codigo_grado'];?></td>
                <td>
                    
                    <a href="<?=base_url('eliminarEstudiante/').$estudiante['carne_alumno']?>" class="btn btn-outline-danger" ><i class="bi bi-trash"></i></a>
                    <a href="<?=base_url('buscarEstudiante/').$estudiante['carne_alumno']?>" type="button" class="btn btn-outline-light" ><i class="bi bi-pencil-square"></i></a>
                </td>
            </tr>
            <?php
        }
         ?>
        </tbody>
    </table>
    <?php
        ?>
    </div>
    <?/*=base_url('buscarEmpleado/').$empleado['empleado_id'];
        */?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>