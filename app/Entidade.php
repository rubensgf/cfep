<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    protected $table = 'entidade';

    protected $fillable = [
        'razaoSocial',
        'nomeFantasma',
        'webSite',
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
        'situacaoCadastro',
        'nomeCompleto',
        'sexo',
        'rg',
        'cpf',
        'expedido',
        'validade',
        'status'
    ];
}
