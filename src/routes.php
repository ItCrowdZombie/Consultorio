<?php


$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/list'){
     require_once __DIR__ . '/../views/pages/citaList.php';
 }

if ($uri == '/list/create'){
    require_once __DIR__ . '/../views/pages/create.php';
}

 if ($uri == 'list/modify'){
     require_once __DIR__ . '/../views/pages/modify.php';
 }

