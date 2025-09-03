<!doctype html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Editar empleados</title>
  </head>
  <body>
    <br><br><br><br>
    <div class="container"><h1>Editar Empleados</h1></div>
    <br><br>
    <hr>
    <div class="container">
        <form action="<?=base_url('editarAutor')?>" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Codigo de Autor</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" placeholder="<?=$datos['codigo_autor'];?>"
                                aria-describedby="inputGroup-sizing-sm" name="codigo_autor" value="<?=$datos['codigo_autor'];?>" readonly>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="nombre"
                                placeholder="Nombre" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['nombre'];?>" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="apellido"
                                placeholder="Apellido" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['apellido'];?>" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nacionalidad</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="nacionalidad"
                                placeholder="nacionalidad" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['nacionalidad'];?>" required>
                        <button type="submit" class="btn btn-outline-warning" id="add">Actualizar</button>
                    </form> 
    </div>
    
  </body>
</html>