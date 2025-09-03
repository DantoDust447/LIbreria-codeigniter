<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="body-tables">
    <hr>
    <a href="<?=base_url('/')?>" class="btn btn-outline-info"><i class="bi bi-house-fill"></i> Inicio</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Libro
    </button>
    <br><br>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar Libros</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <!--id-->
                    <form action="<?=base_url('agregarLibro')?>" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Libro</span>
                            <input type="number" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" id="codigo_libro" name="codigo_libro" >
                        </div>
                        <!--codigo autor-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Autor</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="codigo_autor" name="codigo_autor"
                                placeholder="Codigo Autor" aria-describedby="inputGroup-sizing-sm"  required>
                        </div>
                        <!--codigo editorial-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Editorial</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="codigo_editorial" name="codigo_editorial"
                                placeholder="Codigo Editorial" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--titulo-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Titulo</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="titulo" name="titulo"
                                placeholder="Titulo" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--numero paginas-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Numero de Paginas</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="numero_paginas" name="numero_paginas"
                                placeholder="Numero de Paginas" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--tamanio-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Tamanio</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="tamanio" name="tamanio"
                                placeholder="Tamanio" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--precio-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Precio</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="precio" name="precio"
                                placeholder="Precio" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--estado-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Estado</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="estado" name="estado"
                                placeholder="Estado" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <!--edicion-->
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Edicion</span>
                            <input type="number" class="form-control" aria-label="Sizing example input" id="edicion" name="edicion"
                                placeholder="Edicion" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <button type="submit" class="btn btn-outline-info" id="add">Agregar</button>
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
                <th scope="col">Codigo Libro</th>
                <th scope="col">Codigo Autor</th>
                <th scope="col">Codigo Editorial</th>
                <th scope="col">Titulo</th>
                <th scope="col">Numero de Paginas</th>
                <th scope="col">Tamanio</th>
                <th scope="col">Precio</th>
                <th scope="col">Estado</th>
                <th scope="col">Edicion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $dato) { ?>
            <tr>
                <td><?=$dato['codigo_libro'];?></td>
                <td><?=$dato['codigo_autor'];?></td>
                <td><?=$dato['codigo_editorial'];?></td>
                <td><?=$dato['titulo'];?></td>
                <td><?=$dato['numero_paginas'];?></td>
                <td><?=$dato['tamanio'];?></td>
                <td><?=$dato['precio'];?></td>
                <td><?=$dato['estado'];?></td>
                <td><?=$dato['edicion'];?></td>
                <td><a href="<?=base_url('buscarLibro/'.$dato['codigo_libro'])?>" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a> 
                    <a href="<?=base_url('eliminarLibro/'.$dato['codigo_libro'])?>" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>
