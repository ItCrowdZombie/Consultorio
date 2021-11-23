<?php
namespace App\Core;
use PDO;
use PDOException;

class SQLConexion {
    public function __construct()
    {
        $host="localhost";
        $user="root";
        $pass="root";
        $database="lista_citas";
        $charset="utf-8";
        $options = [PDO::ATTR_DEFAULT_FECTH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO ("mysql:host={$host};dbname={$database};charset{$charset};$user;$pass;$options;"); 
    }
    
}