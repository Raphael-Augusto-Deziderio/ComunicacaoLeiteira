<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nascimento extends Model
{

    protected $table = 'nascimento';

    protected $fillable = ['id_user', 'id_criador', 'id_fiv', 'nome', 'aprovado', 'assinatura', 'nascimento'];

    public $rules = [
        'id_criador' => 'required',
        'id_fiv' => 'required',
        'nascimento' => 'required',
        'assinatura' => 'required'
    ];

    public function getId()
    {
        return $this->id;
    }

}
