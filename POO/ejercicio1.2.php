<?php
                class Persona{
                    // Properties
                    private $nombre;
                    private $apellido1;
                    private $apellido2;
                    private $edad;
                    public $imprimir;
        
                    // Methods
                    function __construct($nombre,$apellido1,$apellido2,$edad){
                        $this->nombre = $nombre;
                        $this->apellido1 = $apellido1;
                        $this->apellido2 = $apellido2;
                        $this->edad = $edad;
                    }
                    function get_nombre(){
                        return $this->nombre;
                    }
                    function set_nombre($nombre){
                        $this->nombre = $nombre;
                    }
        
        
                    function get_apellido1(){
                        return $this->apellido1;
                    }
                    function set_apellido1($apellido1){
                        $this->apellido1 = $apellido1;
                    }
        
        
                    function get_apellido2(){
                        return $this->apellido2;
                    }
                    function set_apellido2($apellido2){
                        $this->apellido2 = $apellido2;
                    }
        
        
                    function get_edad(){
                        return $this->edad;
                    }
                    function set_edad($edad){
                        $this->edad = $edad;
                    }
        
        
                    function imprimir(){
                        $concatenar = "Nombre : " .  $this->nombre . "<br> Apellido1 : " .  $this->apellido1 . "<br> Apellido2 : " .  $this->apellido2 . "<br> Edad : " . $this->edad; 
                        return $concatenar;
                        
                    }
        
        
                }
?>
