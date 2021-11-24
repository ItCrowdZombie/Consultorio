<?php
namespace App\Core;
class SQLCitaRepository implements ICitaRepository {
    private $table = 'citas'; 
    private $conexion;
    function __construct()
    {
        $this->conexion = (new SQLConexion())->mysql;
    }
    function getAll(){

        $query = $this->conexion->query("SELECT * FROM {$this->table}");
        $result = $query->fetchAll();
        return($result);
    }

    function save($usuario, $equipo, $consulta, $description){
        $this->conexion->query("INSERT INTO `{$this->table}` (`usuario`,`equipo`, `consulta`, `description`) VALUES ('{$usuario}','{$equipo}','{$consulta}','{$description}')");
    }
}