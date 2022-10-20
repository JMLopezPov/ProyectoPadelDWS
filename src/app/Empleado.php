<?php

namespace App;

class Empleado extends Persona
{
    private string $direccion;
    private string $cuentaCorriente;
    private string $numSeguridadSocial;
    private HorarioMensual $horario;
    private float $precioPorHora;
    private bool $disponible;
    private float $salario;

    public function __construct(string $dni, string $nombre, string $apellidos ,string $direccion, string $cuentaCorriente,
                                string $numSeguridadSocial)
    {
        parent::__construct($dni,$nombre,$apellidos);
        $this->direccion = $direccion;
        $this->cuentaCorriente = $cuentaCorriente;
        $this->numSeguridadSocial = $numSeguridadSocial;
        $this->disponible = true;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): Empleado
    {
        $this->direccion = $direccion;
        return $this;
    }

    public function getCuentaCorriente(): string
    {
        return $this->cuentaCorriente;
    }

    public function setCuentaCorriente(string $cuentaCorriente): Empleado
    {
        $this->cuentaCorriente = $cuentaCorriente;
        return $this;
    }

    public function getNumSeguridadSocial(): string
    {
        return $this->numSeguridadSocial;
    }

    public function setNumSeguridadSocial(string $numSeguridadSocial): Empleado
    {
        $this->numSeguridadSocial = $numSeguridadSocial;
        return $this;
    }

    public function getHorario(): HorarioMensual
    {
        return $this->horario;
    }

    public function setHorario(HorarioMensual $horario): Empleado
    {
        $this->horario = $horario;
        return $this;
    }

    public function getPrecioPorHora(): float
    {
        return $this->precioPorHora;
    }

    public function setPrecioPorHora(float $precioPorHora): Empleado
    {
        $this->precioPorHora = $precioPorHora;
        return $this;
    }

    public function isDisponible(): bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): Empleado
    {
        $this->disponible = $disponible;
        return $this;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }
    public function setSalario(float $salario): Empleado
    {
        $this->salario = $salario;
        return $this;
    }



    public function calcularSalario():float{
        $this->salario = 3*$this->precioPorHora;
        return $this->salario;
    }

    public function generarHorarioMensual():?Empleado{
        //TODO implementar funcion generarHorarioMensual
        return $this;
    }


}