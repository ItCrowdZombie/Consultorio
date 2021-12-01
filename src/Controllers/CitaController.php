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

    public function viewPageModify() {
        require_once __DIR__ . '/../views/pages/modify.php';
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

    public function displayCitaData($request){
        $citaToDisplay = (new Cita())->getCita($request);
        require_once __DIR__ . '/../views/pages/modify.php';
        var_dump($request);
    
    }

    public function update($request){
        $citaToUpdate= new Cita($request);
        $citaToUpdate-> update();
        $this->redirect('/list');
        
    }

    private function redirect(string $url){
        header( "Location: {$url}");
    }

}




