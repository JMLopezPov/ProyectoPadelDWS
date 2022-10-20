<?php

namespace App;

class Entrenador
{
    private int $numFederacion;
    private int $nivelEntrenador;
    private Jugador $pupilo;

    public function __construct(string $dni, string $nombre, string $apellidos ,string $direccion, string $cuentaCorriente,
                                string $numSeguridadSocial,int $numFederacion,int $nivelEntrenador, $pupilo)
    {
        parent::__construct($dni, $nombre, $apellidos, $direccion, $cuentaCorriente, $numSeguridadSocial);
        if($numFederacion < 0 || $numFederacion > 3){
            $numFederacion = 1;
        }

        $this->numFederacion = $numFederacion;
        $this->nivelEntrenador = $nivelEntrenador;
        $this->pupilo = $pupilo;
    }

    public function getNumFederacion(): Entrenador
    {
        $this->numFederacion;
        return $this;
    }

    public function setNumFederacion(mixed $numFederacion): Entrenador
    {
        $this->numFederacion = $numFederacion;
        return $this;
    }

    public function getNivelEntrenador():int
    {
        return $this->nivelEntrenador;
    }

    public function setNivelEntrenador($nivelEntrenador): Entrenador
    {
        $this->nivelEntrenador = $nivelEntrenador;
        return $this;
    }

    public function getPupilo():Jugador
    {
        return $this->pupilo;
    }

    public function setPupilo(Jugador $pupilo): Entrenador
    {
        $this->pupilo = $pupilo;
        return $this;
    }




}