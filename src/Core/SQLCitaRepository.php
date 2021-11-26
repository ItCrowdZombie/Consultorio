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

    function dbdelete ($id){
        $this->conexion->query("DELETE FROM `{$this->table}` WHERE  `{$this->table}`.`id` ={$id}");
    }

    function getCitaById ($id) {
      $query =  $this->conexion->query("SELECT * FROM {$this->table} WHERE `id` = {$id} ");
      $result = $query->fetch();
      return($result);
    }
}