<?php

namespace App\Personas;

use App\Personas\Jugador;

class Pareja
{
    private Jugador $jugador1;
    private Jugador $jugador2;

    public function __construct($jugador1, $jugador2)
    {
        $this->jugador1 = $jugador1;
        $this->jugador2 = $jugador2;
    }

    public function generarPartida():?Partida{
        //TODO implementar funcion generarPartida Pareja
        return $this;
    }

    public function getJugador1()
    {
        return $this->jugador1;
    }

    public function setJugador1(Jugador $jugador1): Pareja
    {
        $this->jugador1 = $jugador1;
        return $this;
    }

    public function getJugador2()
    {
        return $this->jugador2;
    }

    public function setJugador2( Jugador$jugador2): Pareja
    {
        $this->jugador2 = $jugador2;
        return $this;
    }



}