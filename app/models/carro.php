<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    protected $table ='carros';
    protected $fillable = ['modelo', 'tipo', 'combustivel', 'ano_fab', 'fabricante', 'cor'];
    
}
