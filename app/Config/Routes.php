<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//empleados
$routes->get('/', 'Home::index');
$routes->get('Estudiantes', 'Home::Estudiantes');
$routes->get('eliminarEstudiante/(:num)', 'Home::eliminarEstudiante/$1');
$routes->get('buscarEstudiante/(:num)', 'Home::buscarEstudiante/$1');
$routes->post('editarEstudiante', 'Home::editarEstudiante');
$routes->post('agregarEstudiante', 'Home::agregarEstudiante');
//autores
$routes->get('Autores', 'Autores::Autores');
$routes->get('eliminarAutor/(:num)', 'Autores::eliminarAutor/$1');
$routes->get('buscarAutor/(:num)', 'Autores::buscarAutor/$1');
$routes->post('editarAutor', 'Autores::editarAutor');
$routes->post('agregarAutor', 'Autores::agregarAutor');
//prestamos
$routes->get('Prestamos', 'Prestamos::Prestamos');
$routes->get('eliminarPrestamo/(:num)', 'Prestamos::eliminarPrestamo/$1');
$routes->get('buscarPrestamo/(:num)', 'Prestamos::buscarPrestamo/$1');
$routes->post('editarPrestamo', 'Prestamos::editarPrestamo');
$routes->post('agregarPrestamo', 'Prestamos::agregarPrestamo');
//libros
$routes->get('Libros', 'Libros::Libros');
$routes->get('eliminarLibro/(:num)', 'Libros::eliminarLibro/$1');
$routes->get('buscarLibro/(:num)', 'Libros::buscarLibro/$1');
$routes->post('editarLibro', 'Libros::editarLibro');
$routes->post('agregarLibro', 'Libros::agregarLibro');
//editoriales
$routes->get('Editoriales', 'Editoriales::Editoriales');
$routes->get('eliminarEditorial/(:num)', 'Editoriales::eliminarEditorial/$1');
$routes->get('buscarEditorial/(:num)', 'Editoriales::buscarEditorial/$1');
$routes->post('editarEditorial', 'Editoriales::editarEditorial');
$routes->post('agregarEditorial', 'Editoriales::agregarEditorial');
//estados
$routes->get('Estados', 'Estados::Estados');
$routes->get('eliminarEstado/(:num)', 'Estados::eliminarEstado/$1');
$routes->get('buscarEstado/(:num)', 'Estados::buscarEstado/$1');
$routes->post('editarEstado', 'Estados::editarEstado');
$routes->post('agregarEstado', 'Estados::agregarEstado');
//estudiantes
$routes->get('Estudiantes', 'Estudiantes::Estudiantes');
$routes->get('eliminarEstudiante/(:num)', 'Estudiantes::eliminarEstudiante/$1');
$routes->get('buscarEstudiante/(:num)', 'Estudiantes::buscarEstudiante/$1');
$routes->post('editarEstudiante', 'Estudiantes::editarEstudiante');
$routes->post('agregarEstudiante', 'Estudiantes::agregarEstudiante');
//grados    
$routes->get('Grados', 'Grados::Grados');
$routes->get('eliminarGrado/(:num)', 'Grados::eliminarGrado/$1');
$routes->get('buscarGrado/(:num)', 'Grados::buscarGrado/$1');
$routes->post('editarGrado', 'Grados::editarGrado');
$routes->post('agregarGrado', 'Grados::agregarGrado');