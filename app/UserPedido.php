<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPedido extends Model
{
    protected $fillable = [

        
        'valor',
        'obs',
        'ativo'
    ];

}
