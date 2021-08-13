<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entidade;
use Illuminate\Support\Facades\Auth;
use DB;

class USRCertificadoController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        $dados = DB::table('user_dados')
        ->where('user_dados.user_id', '=', $user_id)
        ->first();

       // dd($dados);

/*        $dados =  DB::select(" SELECT
        ud.user_id,  ud.ncarteirinha, ud.nome, ud.nome_mae,
        ud.nome_pai, ud.sexo, ud.data_nascimento, ud.rg,
        ud.cpf, ud.telefone, ud.celular, ud.endereco, ud.numero, ud.cidade,
        ud.uf, ud.cep,ud.foto, ud.expedido,  ud.vigencia, ud.ativo ,
        u.email
FROM users u inner join user_dados ud on(ud.user_id = u.id)
WHERE ud.user_id = $user_id "); */

        return view('user.certificado.show',compact('dados'));
    }

}
