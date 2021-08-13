<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class USRMembroController extends Controller
{
    public function index() {
        $user_id = Auth::id();

      /*$dados = DB::table('user_dados')
        ->where('user_dados.user_id', '=', $user_id)
        ->first(); */

        $dados =  DB::select(" SELECT
        ud.user_id,  ud.ncarteirinha, ud.nome, ud.nome_mae,
        ud.nome_pai, ud.sexo, ud.data_nascimento, ud.rg,
        ud.cpf, ud.telefone, ud.celular, ud.endereco, ud.numero, ud.cidade,
        ud.uf, ud.cep,ud.foto, ud.expedido,  ud.vigencia, ud.ativo ,
        u.email
FROM users u inner join user_dados ud on(ud.user_id = u.id)
WHERE ud.user_id = $user_id ");

       /*$dados =  DB::select(" SELECT u.email, ud.*
         FROM users u inner join user_dados ud on(ud.user_id = u.id)
         WHERE ud.user_id = $user_id order by verificado asc ");*/

        return view('user.membro.show', compact('dados'));

    }

    public function edit($id)
    {
        $membro= Membro::find($id);
        return view('adm.membro.edit',compact('membro'));
    }

    public function update(Request $request, $id)
    {

        Membro::find($id)->update($request->all());
        return redirect()->route('membros')
                        ->with('success','Dados alterados com sucesso!');
    }


}
