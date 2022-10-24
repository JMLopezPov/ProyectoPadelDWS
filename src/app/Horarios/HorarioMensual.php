<?php

namespace App\Horarios;

use \App\Horarios\HorarioDiario;

class HorarioMensual extends HorarioDiario
{
    private int $mes;
    private int $anyo;
    private array $horariosDiarios;

    /**
     * @param $mes
     * @param $anyo
     * @param $horariosDiarios
     */
    public function __construct($fechaDia, $horaApertura, $horaCierre, $duracionIntervalo, $intervalosDelDia,int $mes, int $anyo, array $horariosDiarios)
    {
        parent::__construct($fechaDia, $horaApertura, $horaCierre, $duracionIntervalo, $intervalosDelDia);
        if($mes < 0 || $mes > 12){
            $mes = 1;
        }
        $this->mes = $mes;
        $this->anyo = $anyo;
        $this->horariosDiarios = $horariosDiarios;
    }

    public function generarHorarios():?HorarioMensual{
        //TODO implementar funcion generarIntervalo
        return $this;
    }

    public function devolverNumHoras():Integer{
        //TODO implementar funcion devolverNumHoras
        return $this;
    }

    /**
     * @return int
     */
    public function getMes(): int
    {
        return $this->mes;
    }

    /**
     * @param int $mes
     */
    public function setMes(int $mes): HorarioMensual
    {
        $this->mes = $mes;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnyo(): int
    {
        return $this->anyo;
    }

    /**
     * @param int $anyo
     */
    public function setAnyo(int $anyo): HorarioMensual
    {
        $this->anyo = $anyo;
        return $this;
    }

    /**
     * @return array
     */
    public function getHorariosDiarios(): array
    {
        return $this->horariosDiarios;
    }

    /**
     * @param array $horariosDiarios
     */
    public function setHorariosDiarios(array $horariosDiarios): HorarioMensual
    {
        $this->horariosDiarios = $horariosDiarios;
        return $this;
    }




}