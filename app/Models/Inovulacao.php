<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inovulacao extends Model
{
    protected $table = 'inovulacao';

    protected $fillable = ['id_user', 'id_criador', 'id_fiv', 'nome', 'aprovado', 'assinatura'];

    public $rules = [
        'id_criador' => 'required',
        'id_fiv' => 'required',
        'inovulacao' => 'required',
        'assinatura' => 'required',
    ];

    public function getId()
    {
        return $this->id;
    }


}
