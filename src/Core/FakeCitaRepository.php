<?php
namespace App\Core;

class FakeCitaRepository implements ICitaRepository
{
    private $citas = [
        [
            'id'=>1,
            'usuario'=>'Lucas',
            'equipo'=>'It Crowd',
            'consulta'=>'Consulta de PHP',
            'description'=>'estamos aprendiendo PHP'
        ],
        [
            'id'=>2,
            'usuario'=>'Rita',
            'equipo'=>'It Crowd',
            'consulta'=>'Consulta MVC',
            'description'=>'estamos aprendiendo MVC',
        ],
        [
            'id'=>3,
            'usuario'=>'Carmen',
            'equipo'=>'It Crowd',
            'consulta'=>'Consulta de SOLID',
            'description'=>'estamos aprendiendo SOLID'
        ]
    ];

    public function getAll(){
        return $this->citas;
    }


}