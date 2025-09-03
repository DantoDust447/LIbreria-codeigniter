<!doctype html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Editar editoriales</title>
  </head>
    <body>
        <br><br><br><br>
        <div class="container"><h1>Editar Editoriales</h1></div>
        <br><br>
        <hr>
        <div class="container">
            <form action="<?=base_url('editarEditorial')?>" method="post">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Codigo</span>
                                <input type="number" class="form-control" aria-label="Sizing example input" placeholder="<?=$datos['codigo_editorial'];?>"
                                    aria-describedby="inputGroup-sizing-sm" id="codigo_editorial" name="codigo_editorial" value="<?=$datos['codigo_editorial'];?>" readonly>
                            </div>
                            <!--nombre-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" id="nombre" name="nombre"
                                    placeholder="Nombre" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['nombre'];?>" required>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" name="direccion"
                                    placeholder="Direccion" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['direccion'];?>" required> 
                            </div>
                            <!--telefono-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telefono</span>
                                <input type="number" class="form-control" aria-label="Sizing example input" id="telefono" name="telefono"
                                    placeholder="Telefono" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['telefono'];?>" required>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                                <input type="email" class="form-control" aria-label="Sizing example input" id="email" name="email"
                                    placeholder="Email" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['email'];?>" required>
                            </div>
                            <button type="submit" class="btn btn-outline-info">Editar</button>
                        </form>
        </div>
  </body>
</html>