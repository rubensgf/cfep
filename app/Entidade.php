<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    protected $table = 'entidades';

    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'site',
        'cnpj',
        'endereco',
        'numero',
        'complemento',
        'cep',
        'bairro',
        'cidade',
        'uf',
        'email',
        'telefone',
        'celular',
        'nome',
        'sexo',
        'rg',
        'cpf',
        'expedido',
        'validade',
        'ativo'
    ];
}

