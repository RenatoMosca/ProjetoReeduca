<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['id_produto',
    'nome_produto',
    'desc_produto',
    'pre_requisitos',
    'url_img_prod',
    'carga_horaria',
    'valor',
    'publico_alvo',
    'ementa'];
    public $primaryKey= 'id_produto';
    public $table='produto';
}
