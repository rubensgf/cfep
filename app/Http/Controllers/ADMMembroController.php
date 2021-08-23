<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDados;
use App\UserFiles;
use App\Pedido;
use App\User;
use Illuminate\Support\Facades\DB;

class ADMMembroController extends Controller
{
    public function index()
    {

        $membros =  DB::select(" SELECT
                ud.id,
                ud.user_id,
                ud.ncarteirinha,
                ud.nome,
                ud.nome_mae,
                ud.nome_pai,
                ud.sexo,
                ud.data_nascimento,
                ud.rg,
                ud.cpf,
                ud.telefone,
                ud.celular,
                ud.endereco,
                ud.numero,
                ud.cidade,
                ud.uf,
                ud.cep,
                ud.foto,
                ud.graduacao,
                ud.universidade,
                ud.dataFormacao,
                ud.naturalidade,
                ud.naturalidade_uf,
                ud.doador,
                ud.expedido,
                ud.vigencia,
                ud.auditado,
                u.ativo ,
                u.email
         FROM users u inner join user_dados ud on(ud.user_id = u.id)
         WHERE u.ativo in('1','2') order by u.ativo desc, auditado asc ");


        return view('adm.membros.index', compact('membros'));

    }

    public function create()
    {
        
        return view('adm.membros.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $membro = UserDados::findOrFail($id);

        $arquivos = UserFiles::findOrFail($id);

        $user = User::select('email','ativo')->findOrFail($id);

        //pega o ultimo pedido do usuario
        $pedido = Pedido::where('user_id',$id)->where('produto_id','1')->orderBy('id', 'desc')->first();

        return view('adm.membros.show',compact('membro', 'id', 'arquivos', 'pedido', 'user'));
    }

    public function edit($id)
    {
        $membro= UserDados::find($id);
        return view('adm.membros.edit',compact('membro'));
    }

    public function update(Request $request, $id)
    {

        UserDados::find($id)->update($request->all());

        //$membro= UserDados::find($id);

        //dd($membro);
        return redirect()->route('membros')
                        ->with('success','Dados alterados com sucesso!');
    }

    public function destroy($id)
    {
        //
    }
}
