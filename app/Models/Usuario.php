<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class Usuario extends RModel implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = "usuarios";
    protected $fillable = ['nome', 'email', 'password'];

    public function getAuthIdentifierName(){
        return $this->getKeyName();
    }
    public function getAuthIdentifier(){
        return $this->getKey();
    }
    public function getAuthPassword(){
        return $this->password;
    }
    public function getRememberToken(){
        return $this->getAttribute($this->getRememberTokenName());
    }
    public function setRememberToken($value){
        $this->setAttribute($this->getRememberTokenName(), $value);
    }
    public function getRememberTokenName(){
        return 'remember_token';
    }
}
