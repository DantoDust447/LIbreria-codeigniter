<!doctype html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Editar estados</title>
    </head>
    <body>
    <br><br><br><br>
    <div class="container"><h1>Editar Estados</h1></div>
    <br><br>
    <hr>
    <div class="container">
        <form action="<?=base_url('editarEstado')?>" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Estado</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" placeholder="<?=$datos['codigo_estado'];?>"
                                aria-describedby="inputGroup-sizing-sm" id="estado_id" name="codigo_estado" value="<?=$datos['codigo_estado'];?>" readonly>
                        </div>
                        <!--nombre-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="nombre" name="nombre"
                                placeholder="Nombre" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['nombre'];?>" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                        </div>
                        <div class="modal-footer">
                            <a href="<?=base_url('Estados');?>" class="btn btn-secondary">Cerrar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>