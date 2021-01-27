<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fiv extends Model
{


    protected $fillable = ['numEmbrioes', 'dataAquisicao', 'matriz' , 'reprodutor', 'nomePertence', 'numControleRegistro', 'raca', 'categoria', 'matrizReceptora', 'assinatura'];

    public $rules = [
        'numEmbrioes' => 'required',
        'dataAquisicao' => 'required',
        'matriz' => 'required',
        'reprodutor' => 'required',
        'nomePertence' => 'required',
        'numControleRegistro' => 'required',
        'raca' => 'required',
        'categoria' => 'required',
        'assinatura' => 'required',
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getNumControleRegistro()
    {
        return $this->numControleRegistro;
    }

}
