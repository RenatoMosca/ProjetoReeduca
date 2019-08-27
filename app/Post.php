<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Post as Authenticatable;
use App\Post_comentario;

class Post extends Model
{
    protected $fillable = ['id_post', 'titulo', 'url_img_post', 'nome_autor_post', 'desc_breve', 'artigo', 'id_categoria'];
        
    public $primaryKey= 'id_post';
    public $table='post';

 public function post_comentario(){
     return $this->hasMany('Post_comentario', 'id_post_comentario', 'id_post');
 }
}


