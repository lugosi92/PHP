<?php
class Persona
{
    private $DNI;
    private $nombre;
    private $apellido;

    function __construct($DNI, $nombre, $apellido)
    {
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getDNI()
    {
        return $this->DNI;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setDNI($DNI)
    {
        $this->DNI = $DNI;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function __toString()
    {
        return "Persona: " . "<br>" . 
        "DNI: " . $this->DNI . "<br>" .
            "Nombre: " . $this->nombre . "<br>" .
            "Apellido: " . $this->apellido . "<br>";
    }
}
