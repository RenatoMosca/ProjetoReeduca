<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Pedido extends Model
{
    protected $fillable = ['id_item_pedido', 'id_pedido', 'id_produto', 'valor'];
    public $primaryKey= 'id_item_pedido';
    public $table='item_pedido';
}
