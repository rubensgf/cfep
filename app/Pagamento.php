<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [
        'pedido_id',
        'membro_id',
        'produto_id',
        'transaction_id',
        'status'
    ];
}
