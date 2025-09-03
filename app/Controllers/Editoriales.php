<?php

namespace App\Controllers;
use App\Models\EditorialesModel;
class Editoriales extends BaseController
{
    //vistas
    public function Editoriales(): string
    {
        $editoriales = new EditorialesModel();
        $datos['datos'] = $editoriales->findAll();
        return view('vista_editoriales', $datos);
    }
    public function eliminarEditorial(int $id)
    {
        $editoriales = new EditorialesModel();
        $editoriales->delete($id);
        return redirect()->to('Editoriales');
    }
    public function buscarEditorial($id)
    {
        $editoriales = new EditorialesModel();
        $datos['datos'] = $editoriales->where(['codigo_editorial' => $id])->first();
        return view('modificarEditorialesForm', $datos); 
    }
    public function editarEditorial()
    {
        $editoriales = new EditorialesModel();
        $datos = [
            'codigo_editorial' => $this->request->getPost('codigo_editorial'),
            'nombre'          => $this->request->getPost('nombre'),
            'direccion'       => $this->request->getPost('direccion'),
            'telefono'        => $this->request->getPost('telefono'),
            'email'           => $this->request->getPost('email')
        ];
        $editoriales->update($datos['codigo_editorial'], $datos);
        return redirect()->to('Editoriales'); 
    }
    public function agregarEditorial()
    {
        $editoriales = new EditorialesModel();
        $datos = [
            'codigo_editorial' => $this->request->getPost('codigo_editorial'),
            'nombre'          => $this->request->getPost('nombre'),
            'direccion'       => $this->request->getPost('direccion'),
            'telefono'        => $this->request->getPost('telefono'),
            'email'           => $this->request->getPost('email')
        ];
        $editoriales->insert($datos);
        return redirect()->to('Editoriales');
    }
}