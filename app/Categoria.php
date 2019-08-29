<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    protected $fillable = ['id_categoria', 'nome_categoria'];        
    public $primaryKey= 'id_categoria';
    public $table='categoria';
}




