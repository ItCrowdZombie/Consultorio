<?php
namespace App\Models;
use App\Core\FakeCitaRepository;
use App\Core\SQLCitaRepository;
use App\Core\ICitaRepository;

class Cita {
    public ?int $id = null;
    public string $usuario;
    public string $equipo;
    public string $consulta;
    public string $descripción;
    private ICitaRepository $db;
    public function __construct($data = null)
    {
        if ($data) {
        $this->id = $data['id'];
        $this->usuario = $data['usuario'];
        $this->equipo = $data['equipo'];
        $this->consulta = $data['consulta'];
        $this->description = $data['description'];
        }
        $this->db = new SQLCitaRepository();
    }   

    public function all(){
        $listCitas = [];
        foreach ($this->db->getAll() as $cita) {
            array_push($listCitas,new self($cita));
        }
        return $listCitas;
    }
}




