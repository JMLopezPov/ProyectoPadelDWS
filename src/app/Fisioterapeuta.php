<?php

namespace App;

class Fisioterapeuta extends Empleado
{
    private $clienteVIP;
    private $numColegiado;

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