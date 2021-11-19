<?php


$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/list'){
     require_once __DIR__ . '/../src/views/pages/citaList.php';
 }

if ($uri == '/list/crear'){
    require_once __DIR__ . '/../src/views/pages/create.php';
}

 if ($uri == 'list/modificar'){
     require_once __DIR__ . '/../src/views/pages/modify';
 }

