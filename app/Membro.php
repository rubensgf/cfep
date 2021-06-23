<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = [

        'foto',
        'id',
        'nome',
        'nomeM',
        'nomeP',
        'dataNasc',
        'sexo',
        'rg',
        'cpf',
        'endereco',
        'uf',
        'foneF',
        'fone',
        'email',
        'expedido',
        'validade',
        'situacao',
        'graduacao',
        'universidade',
        'dataFormacao',
        'observacao'

    ];

    protected $hidden = [

    ];
}
