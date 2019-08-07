<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Post as Authenticatable;

class Post extends Model
{
    public $table='post';
    
}

// class Post extends Authenticatable
// {
//     use Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'id_post', 'titulo', 'url_img_post', 'nome_autor_post', 'desc_breve', 'artigo', 'id_categoria'
//     ];


