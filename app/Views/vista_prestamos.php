<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <hr>
    <a href="<?=base_url('/')?>" class="btn btn-outline-info"><i class="bi bi-house-fill"></i> Inicio</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Prestamo
    </button>
    <br><br>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar Prestamo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body
">
                    <!--id-->
                    <form action="<?=base_url('agregarPrestamo')?>" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">numero Prestamo</span>
                            <input type="number" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" name="numero_prestamo" >
                        </div>
                        <!--codigo libro-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Libro</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" name="codigo_libro"
                                placeholder="Codigo Libro" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--carne alumno-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Carne Alumno</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                placeholder="Carne Alumno" name="carne_alumno" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--fecha prestamo-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha Prestamo</span>
                            <input type="date" class="form-control" aria-label="Sizing example input"
                                placeholder="Fecha Prestamo" name="fecha_prestamo" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--fecha devolucion-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha Devolucion</span>
                            <input type="date" class="form-control" aria-label="Sizing example input"
                                placeholder="Fecha Devolucion" name="fecha_devolucion" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--codigo empleado-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Empleado</span>
                            <input type="number" class="form-control" aria-label="Sizing example input"
                                placeholder="Codigo Empleado" name="codigo_empleado" aria-describedby="inputGroup-sizing-sm" required>
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
                <th scope="col">Numero Prestamo</th>
                <th scope="col">Codigo Libro</th>
                <th scope="col">carne alumno</th>
                <th scope="col">Fecha Prestamo</th>
                <th scope="col">Fecha Devolucion</th>
                <th scope="col">Codigo Empleado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $dato): ?>
            <tr>
                <td><?=$dato['numero_prestamo'];?></td>
                <td><?=$dato['codigo_libro'];?></td>
                <td><?=$dato['carne_alumno'];?></td>
                <td><?=$dato['fecha_prestamo'];?></td>
                <td><?=$dato['fecha_devolucion'];?></td>
                <td><?=$dato['codigo_empleado']?></td>
                <td>
                    <a href="<?=base_url('eliminarPrestamo/'.$dato['numero_prestamo'])?>" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i> Eliminar</a>
                    <a href="<?=base_url('buscarPrestamo/'.$dato['numero_prestamo'])?>" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>