<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;
class Empleados extends BaseController
{
    //vistas
    public function Empleados(): string
    {
        $empleados = new EmpleadosModel();
        $datos['datos'] = $empleados->findAll();
        return view('vista_empleados', $datos);
    }
    public function eliminarEmpleado(int $id)
    {
        $empleados = new EmpleadosModel();
        $empleados->delete($id);
        return redirect()->to('Empleados');
    }
    public function buscarEmpleado($id)
    {
        $empleados = new EmpleadosModel();
        $datos['datos'] = $empleados->where(['codigo_empleado' => $id])->first();
        return view('modificarEmpleadosForm', $datos); 
    }
    public function editarEmpleado()
    {
        $empleados = new EmpleadosModel();
        $datos = [
            'codigo_empleado' => $this->request->getPost('codigo_empleado'),
            'nombre'          => $this->request->getPost('nombre'),
            'apellido'        => $this->request->getPost('apellido'),
            'direccion'       => $this->request->getPost('direccion'),
            'email'           => $this->request->getPost('email')
        ];
        $empleados->update($datos['codigo_empleado'], $datos);
        return redirect()->to('Empleados'); 
    }
    public function agregarEmpleado()
    {
        $empleados = new EmpleadosModel();
        $datos = [
            'codigo_empleado' => $this->request->getPost('codigo_empleado'),
            'nombre'          => $this->request->getPost('nombre'),
            'apellido'        => $this->request->getPost('apellido'),
            'direccion'       => $this->request->getPost('direccion'),
            'email'           => $this->request->getPost('email')
        ];
        $empleados->insert($datos);
        return redirect()->to('Empleados');
    }
}