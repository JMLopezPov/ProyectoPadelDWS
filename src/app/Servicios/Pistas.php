<?php

namespace App\Servicios;

use App\Enums\TipoPista;

class Pistas
{
    private int $idPista;
    private float $precio;
    private bool $luz;
    private float $precioLuz;
    private TipoPista $tipoPista;
    private bool $cubierta;
    private bool $disponibleParaUsar;
    private array $reservaPistaMensuales;

    public function __construct(int $idPista,float $precio,bool $luz,float $precioLuz, $tipoPista,bool $cubierta,
                                bool $disponibleParaUsar,array $reservaPistaMensuales)
    {
        $this->idPista = $idPista;
        $this->precio = $precio;
        $this->luz = $luz;
        $this->precioLuz = $precioLuz;
        $this->tipoPista = $tipoPista;
        $this->cubierta = $cubierta;
        $this->disponibleParaUsar = $disponibleParaUsar;
        $this->reservaPistaMensuales = $reservaPistaMensuales;
    }

    public function generarHorarioMensual():?Pistas{
        //TODO implementar funcion generarHorarioMensual
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdPista()
    {
        return $this->idPista;
    }

    /**
     * @param mixed $idPista
     */
    public function setIdPista($idPista): void
    {
        $this->idPista = $idPista;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getLuz()
    {
        return $this->luz;
    }

    /**
     * @param mixed $luz
     */
    public function setLuz($luz): void
    {
        $this->luz = $luz;
    }

    /**
     * @return mixed
     */
    public function getPrecioLuz()
    {
        return $this->precioLuz;
    }

    /**
     * @param mixed $precioLuz
     */
    public function setPrecioLuz($precioLuz): void
    {
        $this->precioLuz = $precioLuz;
    }

    /**
     * @return mixed
     */
    public function getTipoPista()
    {
        return $this->tipoPista;
    }

    /**
     * @param mixed $tipoPista
     */
    public function setTipoPista($tipoPista): void
    {
        $this->tipoPista = $tipoPista;
    }

    /**
     * @return mixed
     */
    public function getCubierta()
    {
        return $this->cubierta;
    }

    /**
     * @param mixed $cubierta
     */
    public function setCubierta($cubierta): void
    {
        $this->cubierta = $cubierta;
    }

    /**
     * @return mixed
     */
    public function getDisponibleParaUsar()
    {
        return $this->disponibleParaUsar;
    }

    /**
     * @param mixed $disponibleParaUsar
     */
    public function setDisponibleParaUsar($disponibleParaUsar): void
    {
        $this->disponibleParaUsar = $disponibleParaUsar;
    }

    /**
     * @return mixed
     */
    public function getReservaPistaMensuales()
    {
        return $this->reservaPistaMensuales;
    }

    /**
     * @param mixed $reservaPistaMensuales
     */
    public function setReservaPistaMensuales($reservaPistaMensuales): void
    {
        $this->reservaPistaMensuales = $reservaPistaMensuales;
    }




}