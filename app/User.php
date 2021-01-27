<?php


namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
use Authenticatable, CanResetPassword;


    protected $fillable = ['nome', 'email', 'password', 'permissao'];


    static $rules = [
        'nome' => 'required',
        'email' => 'required',
        'password' => 'required',
        'permissao' => 'required'
    ];


    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPermissao()
    {
        return $this->permissao;
    }

}
