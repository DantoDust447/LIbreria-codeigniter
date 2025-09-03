<?php

namespace App\Controllers;
use App\Models\EstudiantesModel;
class Home extends BaseController
{
    //vistas
    public function index(): string
    {
        return view('index');
    }
    public function Estudiantes(): string
    {
        $estudiantes = new EstudiantesModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('vista_estudiantes', $datos);
    }
    public function eliminarEstudiante(int $id)
    {
        $estudiantes = new EstudiantesModel();
        $estudiantes->delete($id);
        return redirect()->to('Estudiantes');
    }
    public function buscarEstudiante($id)
    {
        $estudiantes = new EstudiantesModel();
        $datos['datos'] = $estudiantes->where(['carne_alumno' => $id])->first();
        return view('modificarEstudiantesForm', $datos); 
    }
    public function editarEstudiante()
    {
        $estudiantes = new EstudiantesModel();
        $datos = [
            'carne_alumno'    => $this->request->getPost('carne_alumno'),
            'nombre'          => $this->request->getPost('nombre'),
            'apellido'        => $this->request->getPost('apellido'),
            'direccion'       => $this->request->getPost('direccion'),
            'telefono'        => $this->request->getPost('telefono'),
            'email'           => $this->request->getPost('email'),
            'fechanacimiento' => $this->request->getPost('fechanacimiento'),
            'codigo_grado'    => $this->request->getPost('codigo_grado')
        ];
        $estudiantes->update($datos['carne_alumno'], $datos);
        return redirect()->to('Estudiantes'); 
    }
    public function agregarEstudiante()
    {
        $estudiantes = new EstudiantesModel();
        $datos = [
            'carne_alumno'    => $this->request->getPost('carne_alumno'),
            'nombre'          => $this->request->getPost('nombre'),
            'apellido'        => $this->request->getPost('apellido'),
            'direccion'       => $this->request->getPost('direccion'),
            'telefono'        => $this->request->getPost('telefono'),
            'email'           => $this->request->getPost('email'),
            'fechanacimiento' => $this->request->getPost('fechanacimiento'),
            'codigo_grado'    => $this->request->getPost('codigo_grado')
        ];
        $estudiantes->insert($datos);
        return redirect()->to('Estudiantes'); 
    }
}