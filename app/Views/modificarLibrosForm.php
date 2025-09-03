<!doctype html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Editar libros</title>
  </head>
    <body>
        <br><br><br><br>
        <div class="container"><h1>Editar Libros</h1></div>
        <br><br>
        <hr>
        <div class="container">
            <form action="<?=base_url('editarLibro')?>" method="post">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Libro</span>
                                <input type="number" class="form-control" aria-label="Sizing example input" placeholder="<?=$datos['codigo_libro'];?>"
                                    aria-describedby="inputGroup-sizing-sm" id="codigo_libro" name="codigo_libro" value="<?=$datos['codigo_libro'];?>" readonly>
                            </div>
                            <!--codigo autor-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Autor</span>
                                <input type="number" class="form-control" aria-label="Sizing example input" id="codigo_autor" name="codigo_autor"
                                    placeholder="Codigo Autor" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['codigo_autor'];?>" required>
                            </div>
                            <!--codigo editorial-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Editorial</span>
                                <input type="number" class="form-control" aria-label="Sizing example input" id="codigo_editorial" name="codigo_editorial"
                                    placeholder="Codigo Editorial" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['codigo_editorial'];?>" required>
                            </div>
                            <!--titulo-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Titulo</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" id="titulo" name="titulo"
                                    placeholder="Titulo" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['titulo'];?>" required>
                            </div>
                            <!--numero paginas-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Numero de Paginas</span>
                                <input type="number" class="form-control" aria-label="Sizing example input" id="numero_paginas" name="numero_paginas"
                                    placeholder="Numero de Paginas" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['numero_paginas'];?>" required>
                            </div>
                            <!--tamanio-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Tamanio</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" id="tamanio" name="tamanio"
                                    placeholder="Tamanio" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['tamanio'];?>" required>
                            </div>
                            <!--precio-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Precio</span>
                                <input type="number" step="0.01" class="form-control" aria-label="Sizing example input" id="precio" name="precio"
                                    placeholder="Precio" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['precio'];?>" required>  
                            </div>
                            <!--estado-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Estado</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" id="estado" name="estado"
                                    placeholder="Estado" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['estado'];?>" required>   
                            </div>
                            <!--edicion-->
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Edicion</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" id="edicion" name="edicion"
                                    placeholder="Edicion" aria-describedby="inputGroup-sizing-sm" value="<?=$datos['edicion'];?>" required>
                            </div>
                            <button type="submit" class="btn btn-outline-warning" id="add">Actualizar
                            </button>
                        </form>
        </div>
    </body>
</html>