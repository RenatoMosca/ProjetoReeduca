<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_comentario extends Model
{
    protected $fillable = ['status', 'nome_autor_comentario', 'url_img_comentario', 'comentario'];
    public $primaryKey= 'id_post_comentario';
    public $table='post_comentario';
}
