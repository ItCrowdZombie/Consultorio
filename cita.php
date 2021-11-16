<?php
class Cita {
   private string $usuario;
    private string $equipo;
   private string $consulta;
   private string $descripción;
   public function __construct($usuario,$equipo,$consulta,$descripción)
   {
       $this->usuario = $usuario;
       $this->equipo = $equipo;
       $this->consulta = $consulta;
       $this->descripción = $descripción;
   }   
}



