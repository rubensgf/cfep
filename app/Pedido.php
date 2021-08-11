<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [

        'membro_id',
        'produto_id',
        'valor',
        'status'

    ];

}
