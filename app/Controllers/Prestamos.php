<?php
namespace App\Controllers;
use App\Models\PrestamosModel;
class Prestamos extends BaseController
{
    public function Prestamos(): string
    {
        $prestamos = new PrestamosModel();
        $datos['datos'] = $prestamos->findAll();
        return view('vista_prestamos', $datos);
    }
    public function eliminarPrestamo(int $id)
    {
        $prestamos = new PrestamosModel();
        $prestamos->delete($id);
        return redirect()->to('Prestamos');
    
    }
    public function buscarPrestamo($id)
    {
        $prestamos = new PrestamosModel();
        $datos['datos'] = $prestamos->where(['numero_prestamo' => $id])->first();
        return view('modificarPrestamosForm', $datos); 
    }
    public function editarPrestamo()
    {
        $prestamos = new PrestamosModel();
        $datos = [
            'numero_prestamo' => $this->request->getPost('numero_prestamo'),
            'codigo_libro'    => $this->request->getPost('codigo_libro'),
            'carne_alumno'    => $this->request->getPost('carne_alumno'),
            'fecha_prestamo'  => $this->request->getPost('fecha_prestamo'),
            'fecha_devolucion'=> $this->request->getPost('fecha_devolucion'),
            'codigo_empleado' => $this->request->getPost('codigo_empleado'),
            'estado'          => $this->request->getPost('estado')
        ];
        $prestamos->update($datos['numero_prestamo'], $datos);
        return redirect()->to('Prestamos'); 
    }
    public function agregarPrestamo()
    {
        $prestamos = new PrestamosModel();
        $datos = [
            'numero_prestamo' => $this->request->getPost('numero_prestamo'),
            'codigo_libro'    => $this->request->getPost('codigo_libro'),
            'carne_alumno'    => $this->request->getPost('carne_alumno'),
            'fecha_prestamo'  => $this->request->getPost('fecha_prestamo'),
            'fecha_devolucion'=> $this->request->getPost('fecha_devolucion'),
            'codigo_empleado' => $this->request->getPost('codigo_empleado'),
            'estado'          => $this->request->getPost('estado')
        ];
        $prestamos->insert($datos);
        return redirect()->to('Prestamos');
    }
}