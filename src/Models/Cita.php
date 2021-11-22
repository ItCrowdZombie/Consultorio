<?php
namespace App\Models;
use App\Core\Database;

class Cita {
    private string $usuario;
    private string $equipo;
    private string $consulta;
    private string $descripción;
    private $db;
    public function __construct($usuario,$equipo,$consulta,$descripción)
    {
        $this->usuario = $usuario;
        $this->equipo = $equipo;
        $this->consulta = $consulta;
        $this->descripción = $descripción;
        $this->db = new Database();
    }   

    public function getUsuario(){
        return $this->usuario;
    }
    public function getEquipo(){
        return $this->equipo;
    }   
    public function getConsulta(){
        return $this->consulta;
    }
    public function getDescripcion(){
        return $this->descripción;
    }

    public function setUsuario($value){
        $this->descripción = $value;
    }

    public function setEquipo($value){
        $this->equipo = $value;
    }   

    public function setConsulta($value){
        $this->consulta = $value;
    }

    public function setDescripcion($value){
        $this->descripción = $value;
    }

    public function all(){
        $listCitas = [];
        foreach($this->db->getAll() as $cita){

        }
    }
}




