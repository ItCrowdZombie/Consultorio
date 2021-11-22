<?php
namespace App\Core;

class Database
{
    private $citas = [
        [
            'id'=>1,
            'equipo'=>'It Crowd',
            'consulta'=>'Consulta de PHP',
            'descripcion'=>'estamos aprendiendo PHP'
        ],
        [
            'id'=>2,
            'equipo'=>'It Crowd',
            'consulta'=>'Consulta MVC',
            'descripcion'=>'estamos aprendiendo MVC',
        ],
        [
            'id'=>3,
            'equipo'=>'It Crowd',
            'consulta'=>'Consulta de SOLID',
            'descripcion'=>'estamos aprendiendo SOLID'
        ]
    ];

    public function getAll(){
        return $this->citas;
    }


}