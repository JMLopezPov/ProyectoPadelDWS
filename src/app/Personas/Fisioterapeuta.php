<?php

namespace App\Personas;

use \App\Personas\Jugador;

class Fisioterapeuta extends Empleado
{
    private int $clienteVIP;
    private Jugador $numColegiado;

    public function __construct(string $dni, string $nombre, string $apellidos ,string $direccion, string $cuentaCorriente,
                                string $numSeguridadSocial, $clienteVIP, int $numColegiado)
    {
        parent::__construct($dni, $nombre, $apellidos, $direccion, $cuentaCorriente, $numSeguridadSocial);
        $this->clienteVIP = $clienteVIP;
        $this->$numColegiado = $numColegiado;
    }

    public function getClienteVIP()
    {
        return $this->clienteVIP;
    }

    public function setClienteVIP($clienteVIP): void
    {
        $this->clienteVIP = $clienteVIP;
    }




}