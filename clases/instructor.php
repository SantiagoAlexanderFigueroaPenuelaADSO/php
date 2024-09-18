<?php
include_once("persona.php");
class Instructor extends persona
{

    protected $sueldo;
    protected $horario;

    public function getsueldo()
    {
        return $this->sueldo;
    }
    public function gethorario()
    {
        return $this->horario;
    }

    public function setsueldo($sueldo)
    {
        return $this->sueldo = $sueldo;
    }
    public function sethorario($horario)
    {
        return $this->horario = $horario;
    }

}