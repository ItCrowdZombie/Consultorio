<?php
namespace App\Core;
class SQLCitaRepository implements ICitaRepository {
    private $table = `citas`; //verificar nombre tabla que no está claro//
    private $conexion;
    function __construct()
    {
        $this->conexion = (new SQLConexion())->mysql;
    }
    function getAll(){

        $query = $this->conexion->query("select * FROM {$this->table}");
        $result = $query->fetchAll();
        return($result);

    }
}