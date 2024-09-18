
<?php

 class persona extends modelo
 {

    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $telefono;
    protected $correo;
    protected $documento; 
    protected $direccion;

    public function __construct(
        $id,
        $table,
        $connection
    )
    {
        parent ::__construct($id,$table,$connection);
    }


    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function getTelfono()
    {
        return $this->telefono;
    }
    public function getcorreo()
    {
        return $this->correo;
    }
    public function getdocumento()
    {
        return $this->documento;
    }
    public function getdireccion()
    {
        return $this->direccion;
    }
    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }
    public function setApellido($apellido)
    {
        return $this->apellido = $apellido;
    }
    public function setEdad($edad)
    {
        return $this->edad = $edad;
    }
    public function setTelefono($telefono)
    {
        return $this->telefono = $telefono;
    }
    public function setcorreo($correo)
    {
        return $this->correo = $correo;
    }
    public function setdocumento($documento)
    {
        return $this->documento = $documento;
    }
    public function setdireccion($direccion)
    {
        return $this->direccion = $direccion;
    }

    public function getFullname(){
        return "el nombre completo es: " . $this->nombre. "" .$this->apellido;
    }
}

?>