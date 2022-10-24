<?php

namespace App\Personas;



class Persona
{
    private string $dni;
    private string $nombre;
    private string $apellidos;
    private string $telefono;

    public function __construct(string $dni, string $nombre, string $apellidos){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function setDNI(string $dni):Persona{
        $this->dni = $dni;
        return $this;
    }

    public function getDNI():string{
        return $this->dni;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos)
    {
        $this->apellidos = $apellidos;
    }


    public function getNombre(): string
    {
        return $this->nombre;
    }


    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getTelefono():string
    {
        return $this->telefono;
    }

    public function setTelefono($telefono):Persona
    {
        $this->telefono = $telefono;
        return $this;
    }





}