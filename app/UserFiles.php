<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFiles extends Model
{
    protected $fillable = [
        'user_id',
        'ficha',
        'diploma',
        'diploma_verso',
        'rg',
        'cpf',
        'titulo',
        'comprovante'
    ];
}
