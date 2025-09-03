<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Editar prestamos</title>
</head>

<body>
    <br><br><br><br>
    <div class="container">
        <h1>Editar Prestamos</h1>
    </div>
    <br><br>
    <hr>
    <div class="container">
        <form action="<?=base_url('editarPrestamo')?>" method="post">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Numero de Prestamo</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    placeholder="<?=$datos['numero_prestamo'];?>" aria-describedby="inputGroup-sizing-sm"
                    name="numero_prestamo" value="<?=$datos['numero_prestamo'];?>" readonly>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Libro</span>
                <input type="number" class="form-control" aria-label="Sizing example input" name="codigo_libro"
                    placeholder="Codigo Libro" aria-describedby="inputGroup-sizing-sm"
                    value="<?=$datos['codigo_libro'];?>" required>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Carnet Alumno</span>
                <input type="number" class="form-control" aria-label="Sizing example input" name="carne_alumno"
                    placeholder="Carnet Alumno" aria-describedby="inputGroup-sizing-sm"
                    value="<?=$datos['carne_alumno'];?>" required>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Fecha Prestamo</span>
                <input type="date" class="form-control" aria-label="Sizing example input" name="fecha_prestamo"
                    placeholder="Fecha Prestamo" aria-describedby="inputGroup-sizing-sm"
                    value="<?=$datos['fecha_prestamo'];?>" required>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Fecha Devolucion</span>
                <input type="date" class="form-control" aria-label="Sizing example input" name="fecha_devolucion"
                    placeholder="Fecha Devolucion" aria-describedby="inputGroup-sizing-sm"
                    value="<?=$datos['fecha_devolucion'];?>" required>
            </div>
             <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Empleado</span>
                <input type="number" class="form-control" aria-label="Sizing example input" name="codigo_empleado"
                    placeholder="Codigo Empleado" aria-describedby="inputGroup-sizing-sm"
                    value="<?=$datos['codigo_empleado'];?>" required>
            </div>
            <button type="submit" class="btn btn-outline-warning" id="add">Actualizar</button>
        </form>
    </div>

</body>

</html>