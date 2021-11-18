<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/'){
    require_once __DIR__ . '/../Views/layouts/index.php';
}

if ($uri == '/create'){
    require_once __DIR__ . '/../Views/pages/create.php';
}

if ($uri == '/modify'){
    require_once __DIR__ . '/../Views/pages/create.php';
}

