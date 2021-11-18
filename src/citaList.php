<?php
require_once __DIR__ . '/../src/Cita.php';

    $cita1 = new Cita('Facu','It Crowd','Servidor','como se enrutan las vistas');
    $cita2 = new Cita('Rita','It Crowd','LocalHost','no me sale el num 8000');
    $cita3 = new Cita('Meli','It Crowd','Funciones','que parametros tomar');
    
    
    $listaCitas = array($cita1,$cita2,$cita3);
?>