<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [

        'user_id',
        'produto_id',
        'token',
        'referencia',
        'valor',
        'observacao',
        'situacao',
        'status'
    ];

}



