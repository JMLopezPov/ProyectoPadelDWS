<?php

namespace App;


class Jugador extends Persona
{
    private int $nivelJuego;
    private ManoHabil $manoHabil;
    private LadoPreferido $ladoPreferido;
    private HorarioMensual $horarioMensualPreferido;
    private int $indiceDeIrresponsabilidad;
    private int $numFederacion;
    private Fisioterapeuta $fisioAsociado;
    private Entrenador $entrenadorPersonal;
    private bool $renovacionAutomaticaHorario;
    private bool $PartidasMixtas;
    private bool $esSocio;

    public function __construct(string $dni, string $nombre, string $apellidos, int $nivelJuego, $manoHabil, $ladoPreferido,
                                $horarioMensualPreferido, int $indiceDeIrresponsabilidad, int $numFederacion, $fisioAsociado,
                                $entrenadorPersonal, $PartidasMixtas, $esSocio)
    {
        parent::__construct($dni,$nombre,$apellidos);
        $this->nivelJuego = $nivelJuego;
        $this->manoHabil = $manoHabil;
        $this->ladoPreferido = $ladoPreferido;
        $this->horarioMensualPreferido = $horarioMensualPreferido;
        $this->indiceDeIrresponsabilidad = $indiceDeIrresponsabilidad;
        $this->numFederacion = $numFederacion;
        $this->fisioAsociado = $fisioAsociado;
        $this->entrenadorPersonal = $entrenadorPersonal;
        $this->PartidasMixtas = $PartidasMixtas;
        $this->esSocio = $esSocio;
        $this->renovacionAutomaticaHorario = true;

    }

    public function generarHorarioPreferido(bool $renovacion): Jugador{
        //TODO metodo generarHorarioPreferido
        return $this;
    }

    /**
     * @return int
     */
    public function getNivelJuego(): int
    {
        return $this->nivelJuego;
    }

    /**
     * @param int $nivelJuego
     */
    public function setNivelJuego(int $nivelJuego): Jugador
    {
        $this->nivelJuego = $nivelJuego;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManoHabil()
    {
        return $this->manoHabil;
    }

    /**
     * @param mixed $manoHabil
     */
    public function setManoHabil($manoHabil): Jugador
    {
        $this->manoHabil = $manoHabil;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLadoPreferido()
    {
        return $this->ladoPreferido;
    }

    /**
     * @param mixed $ladoPreferido
     */
    public function setLadoPreferido($ladoPreferido): Jugador
    {
        $this->ladoPreferido = $ladoPreferido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHorarioMensualPreferido()
    {
        return $this->horarioMensualPreferido;
    }

    /**
     * @param mixed $horarioMensualPreferido
     */
    public function setHorarioMensualPreferido($horarioMensualPreferido): Jugador
    {
        $this->horarioMensualPreferido = $horarioMensualPreferido;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndiceDeIrresponsabilidad(): int
    {
        return $this->indiceDeIrresponsabilidad;
    }

    /**
     * @param int $indiceDeIrresponsabilidad
     */
    public function setIndiceDeIrresponsabilidad(int $indiceDeIrresponsabilidad): Jugador
    {
        $this->indiceDeIrresponsabilidad = $indiceDeIrresponsabilidad;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumFederacion(): int
    {
        return $this->numFederacion;
    }

    /**
     * @param int $numFederacion
     */
    public function setNumFederacion(int $numFederacion): Jugador
    {
        $this->numFederacion = $numFederacion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFisioAsociado()
    {
        return $this->fisioAsociado;
    }

    /**
     * @param mixed $fisioAsociado
     */
    public function setFisioAsociado($fisioAsociado): Jugador
    {
        $this->fisioAsociado = $fisioAsociado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntrenadorPersonal()
    {
        return $this->entrenadorPersonal;
    }

    /**
     * @param mixed $entrenadorPersonal
     */
    public function setEntrenadorPersonal($entrenadorPersonal): Jugador
    {
        $this->entrenadorPersonal = $entrenadorPersonal;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRenovacionAutomaticaHorario(): bool
    {
        return $this->renovacionAutomaticaHorario;
    }

    /**
     * @param bool $renovacionAutomaticaHorario
     */
    public function setRenovacionAutomaticaHorario(bool $renovacionAutomaticaHorario): Jugador
    {
        $this->renovacionAutomaticaHorario = $renovacionAutomaticaHorario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMixtas()
    {
        return $this->PartidasMixtas;
    }

    /**
     * @param mixed $mixtas
     */
    public function setMixtas($PartidasMixtas): Jugador
    {
        $this->$PartidasMixtas = $PartidasMixtas;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEsSocio()
    {
        return $this->esSocio;
    }

    /**
     * @param mixed $esSocio
     */
    public function setEsSocio($esSocio): Jugador
    {
        $this->esSocio = $esSocio;
        return $this;
    }



}