<?php

/**
 * Atributos para empleado:
 * 
 * nombre
 * direccion
 * telefono
 * edad
 * sexo
 * puesto  
 */

class Alumno{
    private $codigo;
    private $nombre;
    private $correo;
    public $carrera;


    public function __construct($atributos){
     
        $this->codigo = $atributos["codigo"];
        $this->nombre = $atributos["nombre"];
        $this->correo = strtolower($atributos["correo"]);
        $this->carrera = $atributos["carrera"];
        
    }

    public function guardar(){
        echo "Se ha guardado: $this->codigo, $this->nombre
        , $this->correo, $this->carrera";
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setCorreo($nuevoCorreo){
        $this->correo = $nuevoCorreo;
    }

    public function getCorreo(){
        echo "El correo actual es: $this->correo";
    }
    

}

?>