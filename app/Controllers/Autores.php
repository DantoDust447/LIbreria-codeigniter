<?php

namespace App\Controllers;
use App\Models\AutoresModel;
class Autores extends BaseController
{
    public function Autores(): string
    {
        $autores = new AutoresModel();
        $datos['datos'] = $autores->findAll();
        return view('vista_autores', $datos);
    }
    public function eliminarAutor(int $id)
    {
        $autores = new AutoresModel();
        $autores->delete($id);
        return redirect()->to('Autores');
    }
    public function buscarAutor($id)
    {
        $autores = new AutoresModel();
        $datos['datos'] = $autores->where(['codigo_autor' => $id])->first();
        return view('modificarAutoresForm', $datos); 
    }
    public function editarAutor()
    {
        $autores = new AutoresModel();
        $datos = [
            'codigo_autor' => $this->request->getPost('codigo_autor'),
            'nombre'       => $this->request->getPost('nombre'),
            'apellido'     => $this->request->getPost('apellido'),
            'nacionalidad' => $this->request->getPost('nacionalidad')
        ];
        $autores->update($datos['codigo_autor'], $datos);
        return redirect()->to('Autores'); 
    }
    public function agregarAutor()
    {
        $autores = new AutoresModel();
        $datos = [
            'codigo_autor' => $this->request->getPost('codigo_autor'),
            'nombre'       => $this->request->getPost('nombre'),
            'apellido'     => $this->request->getPost('apellido'),
            'nacionalidad' => $this->request->getPost('nacionalidad')
        ];
        $autores->insert($datos);
        return redirect()->to('Autores');
    }
}