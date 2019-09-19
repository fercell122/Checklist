<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    
    protected $table ='users';
    protected $fillable = ['name', 'email', 'password'];
    

    public function carros()

    {
        return $this->hasMany(carro::class);
        
    }



}
