<?php

namespace App\Controllers;
use App\Models\EstadosModel;
class Estados extends BaseController
{
    //vistas
    public function Estados(): string
    {
        $estados = new EstadosModel();
        $datos['datos'] = $estados->findAll();
        return view('vista_estados', $datos);
    }
    public function eliminarEstado(int $id)
    {
        $estados = new EstadosModel();
        $estados->delete($id);
        return redirect()->to('Estados');
    }
    public function buscarEstado($id)
    {
        $estados = new EstadosModel();
        $datos['datos'] = $estados->where(['codigo_estado' => $id])->first();
        return view('modificarEstadosForm', $datos); 
    }
    public function editarEstado()
    {
        $estados = new EstadosModel();
        $datos = [
            'codigo_estado' => $this->request->getPost('codigo_estado'),
            'nombre'        => $this->request->getPost('nombre')
        ];
        $estados->update($datos['codigo_estado'], $datos);
        return redirect()->to('Estados'); 
    }
    public function agregarEstado()
    {
        $estados = new EstadosModel();
        $datos = [
            'codigo_estado' => $this->request->getPost('codigo_estado'),
            'nombre'        => $this->request->getPost('nombre')
        ];
        $estados->insert($datos);
        return redirect()->to('Estados');
    }
}