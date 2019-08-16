<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Autor as Authenticatable;


class Autor extends Model
{
    protected $fillable = ['nome_autor'];
    public $primaryKey= 'id_autor';
    public $table='autor';
}
