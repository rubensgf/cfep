<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [

        'membro_id',
        'produto_id',
        'code_payment',
        'transaction_id',
        'valor',
        'status'

    ];

}

