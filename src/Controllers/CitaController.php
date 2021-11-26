<?php
namespace App\Controllers;

use App\Core\SQLCitaRepository;
use App\Models\Cita;

class CitaController {
    
    public function index() {
        $citas = (new Cita())->all();
        require_once __DIR__ . '/../views/pages/citaList.php';
        
    }
    public function create() {
        require_once __DIR__ . '/../views/pages/create.php';
    }

    public function store($request){
        $citaToSave = new Cita($request);
        echo $citaToSave->save();
        $this->redirect('/list');
        }

    public function delete ($request){
        $citaToDelete = new Cita();
        $citaToDelete -> citaDelete ($request);
        $this->redirect('/list');

    }

    public function modify ($request){
        $citaToUpdate = (new Cita())-> getCita($request);
        require_once __DIR__ . '/../Views/pages/modify.php';
    }

    private function redirect(string $url)  {
        header( "Location: {$url}");
    }

}




