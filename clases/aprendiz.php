<?php
include_once("persona.php");
class Aprendiz extends persona
{

    protected $cuenta;
    protected $promedio;


    public function __construct(
        PDO $connection 
    ) {
        parent::__construct("id","users",$connection);
    }

    public function getcuenta()
    {
        return $this->cuenta;
    }
    public function getpromedio()
    {
        return $this->promedio;
    }

    public function setcuenta($cuenta)
    {
        return $this->cuenta = $cuenta;
    }
    public function setpromedio($promedio)
    {
        return $this->promedio = $promedio;
    }
}