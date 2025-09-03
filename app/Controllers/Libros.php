<?php

namespace App\Controllers;
use App\Models\LibrosModel;
class Libros extends BaseController
{
    //vistas
    public function index(): string
    {
        return view('index');
    }
    public function Libros(): string
    {
        $libros = new LibrosModel();
        $datos['datos'] = $libros->findAll();
        return view('vista_libros', $datos);
    }
    public function eliminarLibro(int $id)
    {
        $libros = new LibrosModel();
        $libros->delete($id);
        return redirect()->to('Libros');
    }
    public function buscarLibro($id)
    {
        $libros = new LibrosModel();
        $datos['datos'] = $libros->where(['codigo_libro' => $id])->first();
        return view('modificarLibrosForm', $datos); 
    }
    public function editarLibro()
    {
        $libros = new LibrosModel();
        $datos = [
            'codigo_libro'     => $this->request->getPost('codigo_libro'),
            'codigo_autor'     => $this->request->getPost('codigo_autor'),
            'codigo_editorial' => $this->request->getPost('codigo_editorial'),
            'titulo'           => $this->request->getPost('titulo'),
            'numero_paginas'   => $this->request->getPost('numero_paginas'),
            'tamanio'          => $this->request->getPost('tamanio'),
            'precio'           => $this->request->getPost('precio'),
            'estado'           => $this->request->getPost('estado'),
            'edicion'          => $this->request->getPost('edicion')
        ];
        $libros->update($datos['codigo_libro'], $datos);
        return redirect()->to('Libros'); 
    }
    public function agregarLibro()
    {
        $libros = new LibrosModel();
        $datos = [
            'codigo_libro'     => $this->request->getPost('codigo_libro'),
            'codigo_autor'     => $this->request->getPost('codigo_autor'),
            'codigo_editorial' => $this->request->getPost('codigo_editorial'),
            'titulo'           => $this->request->getPost('titulo'),
            'numero_paginas'   => $this->request->getPost('numero_paginas'),
            'tamanio'          => $this->request->getPost('tamanio'),
            'precio'           => $this->request->getPost('precio'),
            'estado'           => $this->request->getPost('estado'),
            'edicion'          => $this->request->getPost('edicion')
        ];
        $libros->insert($datos);
        return redirect()->to('Libros'); 
    }
}