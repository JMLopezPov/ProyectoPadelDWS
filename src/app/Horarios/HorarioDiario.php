<?php

namespace App\Horarios;

use \App\Horarios\Intervalo;

class HorarioDiario extends Intervalo
{
    private \DateTime $fechaDia;
    private \DateTime $horaApertura;
    private \DateTime $horaCierre;
    private int $duracionIntervalo;
    private array $intervalosDelDia;

    public function __construct($horaInicio, $horaFin, $disponibilidad, $jugadorReservado,$fechaDia, $horaApertura, $horaCierre, int $duracionIntervalo, array $intervalosDelDia)
    {
        parent::__construct($horaInicio, $horaFin, $disponibilidad, $jugadorReservado);
        $this->fechaDia = $fechaDia;
        $this->horaApertura = $horaApertura;
        $this->horaCierre = $horaCierre;
        $this->duracionIntervalo = $duracionIntervalo;
        $this->intervalosDelDia = $intervalosDelDia;
    }

    public function generarIntervalo():?HorarioDiario{
        //TODO implementar funcion generarIntervalo
        return $this;
    }

    public function imprimirHorario():String{
        //TODO implementar funcion imprimirHorario
        return $this;
    }



    public function getFechaDia()
    {
        return $this->fechaDia;
    }

    public function setFechaDia($fechaDia): HorarioDiario
    {
        $this->fechaDia = $fechaDia;
        return $this;
    }

    public function getHoraApertura()
    {
        return $this->horaApertura;
    }

    public function setHoraApertura(\DateTime $horaApertura): HorarioDiario
    {
        $this->horaApertura = $horaApertura;
        return $this;
    }

    public function getHoraCierre()
    {
        return $this->horaCierre;
    }

    public function setHoraCierre(\DateTime $horaCierre): HorarioDiario
    {
        $this->horaCierre = $horaCierre;
        return $this;
    }

    public function getDuracionIntervalo()
    {
        return $this->duracionIntervalo;
    }

    public function setDuracionIntervalo(int $duracionIntervalo): HorarioDiario
    {
        $this->duracionIntervalo = $duracionIntervalo;
        return $this;
    }

    public function getIntervalosDelDia()
    {
        return $this->intervalosDelDia;
    }

    public function setIntervalosDelDia(array $intervalosDelDia): HorarioDiario
    {
        $this->intervalosDelDia = $intervalosDelDia;
        return $this;
    }




}