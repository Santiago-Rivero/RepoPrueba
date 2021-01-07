<?php
require_once 'Alumno.php';

$santiago = new Alumno();
$santiago->setNombre("Santiago");
echo "El nombre la clases es" . $santiago->getNombre;
?>