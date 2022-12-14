<?php

namespace App\Horarios;

use App\Personas\Jugador;

class Intervalo
{
    private float $horaInicio;
    private float $horaFin;
    private bool $disponibilidad;
    private Jugador $jugadorReservado;

    public function __construct(float $horaInicio, float $horaFin)
    {
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
    }

    public function reservarHorario(Jugador $jugador): ?Intervalo{
        //TODO implementar función reservarHorario
        return $this;
    }

    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    public function setHoraInicio(float $horaInicio): Intervalo
    {
        $this->horaInicio = $horaInicio;
        return $this;
    }

    public function getHoraFin()
    {
        return $this->horaFin;
    }

    public function setHoraFin(float $horaFin): Intervalo
    {
        $this->horaFin = $horaFin;
        return $this;
    }

    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    public function setDisponibilidad(bool $disponibilidad): Intervalo
    {
        $this->disponibilidad = $disponibilidad;
        return $this;
    }

    public function getJugadorReservado()
    {
        return $this->jugadorReservado;
    }

    public function setJugadorReservado(Jugador $jugadorReservado): Intervalo
    {
        $this->jugadorReservado = $jugadorReservado;
        return $this;
    }




}