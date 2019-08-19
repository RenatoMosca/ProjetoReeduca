<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Post as Authenticatable;

class Post extends Model
{
    protected $fillable = ['id_post', 'titulo', 'url_img_post', 'nome_autor_post', 'desc_breve', 'artigo', 'id_categoria'];
        
    public $primaryKey= 'id_post';
    public $table='post';
}


