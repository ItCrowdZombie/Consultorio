<?php
namespace App\Controllers;
use App\Models\Cita;

class CitaController {
    
    public function index() {
        //$citas = (new Cita())->all();
        require_once __DIR__ . '/../views/pages/citaList.php';
        
    }
    public function create() {
        require_once __DIR__ . '/../views/pages/create.php';
    }


}


