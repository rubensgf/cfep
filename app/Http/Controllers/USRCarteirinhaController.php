<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entidade;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class USRCarteirinhaController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        $dados = DB::table('user_dados')
        ->where('user_dados.user_id', '=', $user_id)
        ->first();

        /*$dados = DB::table('membros')
        ->where('membros.user_id', '=', $user_id)
        ->first(); */

        /*$dados =  FacadesDB::select(" SELECT u.email, ud.*
         FROM users u inner join user_dados ud on(ud.user_id = u.id)
         WHERE ud.user_id = $user_id order by verificado asc "); */

        /* $dados =  DB::select(" SELECT
                ud.user_id,  ud.ncarteirinha, ud.nome, ud.nome_mae,
                ud.nome_pai, ud.sexo, ud.data_nascimento, ud.rg,
                ud.cpf, ud.telefone, ud.celular, ud.endereco, ud.numero, ud.cidade,
                ud.uf, ud.cep,ud.foto, ud.expedido,  ud.vigencia, ud.ativo ,
                u.email
        FROM users u inner join user_dados ud on(ud.user_id = u.id)
        WHERE ud.user_id = $user_id ");*/

        return view('user.carteirinha.show',compact('dados'));
    }

}
