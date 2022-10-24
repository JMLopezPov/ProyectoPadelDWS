<?php

namespace App\Servicios;

use \App\Personas\Pareja;
use App\Horarios\Intervalo;

class Partida
{
    private Pareja $pareja1;
    private Pareja $pareja2;
    private Pistas $pista;
    private Intervalo $intervalo;

    public function __construct($pareja1, $pareja2, $pista, $intervalo)
    {
        $this->pareja1 = $pareja1;
        $this->pareja2 = $pareja2;
        $this->pista = $pista;
        $this->intervalo = $intervalo;
    }
    public function generarPartida():?Partida{
        //TODO implementar funcion generarPartida Partida
        return $this;
    }

    public function getPareja1()
    {
        return $this->pareja1;
    }

    public function setPareja1( Pareja $pareja1): Partida
    {
        $this->pareja1 = $pareja1;
        return $this;
    }

    public function getPareja2()
    {
        return $this->pareja2;
    }

    public function setPareja2(Pareja $pareja2): Partida
    {
        $this->pareja2 = $pareja2;
        return $this;
    }

    public function getPista()
    {
        return $this->pista;
    }

    public function setPista(Pistas $pista): Partida
    {
        $this->pista = $pista;
        return $this;
    }

    public function getIntervalo()
    {
        return $this->intervalo;
    }

    public function setIntervalo(Intervalo $intervalo): Partida
    {
        $this->intervalo = $intervalo;
        return $this;
    }


}