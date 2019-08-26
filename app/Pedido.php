<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['id_pedido', 'status', 'id', 'forma_pagto', 'nr_parcelas'];
    public $primaryKey= 'id_pedido';
    public $table='pedido';
}
