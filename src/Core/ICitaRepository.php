<?php
namespace App\Core;

interface ICitaRepository {
    function getAll();  
    function save($usuario,$equipo,$consulta,$description);
    function dbdelete ($id);
    function getCitaById ($id);
}
