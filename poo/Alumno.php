<?php
class Alumno{
    /** @var string*/
    private $nombre;
     /** @var string*/
    private $apellido;
     /** @var string*/
    private $email;
     /** @var int*/
    private $legajo;
     /** @var DateTime*/
    private $fechaNacimiento;

    public function __contruct($nombre, $apellido){

    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

}
?>