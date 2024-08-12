<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pedido extends RModel
{
    protected $table = 'pedidos';
    protected $dates = ['data_pedido'];
    protected $fillable = ['data_pedido', 'status', 'usuario_id'];
    
}
