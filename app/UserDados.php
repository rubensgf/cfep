<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDados extends Model
{
    protected $fillable = [
        'user_id',
        'ncarteirinha',
        'nome',
        'nome_mae',
        'nome_pai',
        'sexo',
        'data_nascimento',
        'rg',
        'cpf',
        'telefone',
        'celular',
        'endereco',
        'numero',
        'cidade',
        'uf',
        'cep',
        'foto',
        'graduacao',
        'universidade',
        'dataFormacao',
        'naturalidade',
        'naturalidade_uf',
        'doador',
        'assinatura',
        'expedido',
        'vigencia',
        'auditado',
        'ativo' //aguardando, ativo, cancelado

        /*
        'expedido',
        'validade',
        'situacao',
        'graduacao',
        'universidade',
        'dataFormacao',
        'observacao' */

    ];
}
