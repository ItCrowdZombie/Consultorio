<?php

var_dump ($_POST);
$uri = $_SERVER["REQUEST_URI"];

// if ($uri == '/'){
//     require_once __DIR__ . '/../public/index.php';
// }

if ($uri == '/create'){
    require_once __DIR__ . '/../Views\pages/create.php';
}

// if ($uri == '/modify'){
//     require_once __DIR__ . '/../Views\pages/modify.php';
// }

