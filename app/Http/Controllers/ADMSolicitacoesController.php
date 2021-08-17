<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDados;
use App\Pedido;
use Illuminate\Support\Facades\DB;

class ADMSolicitacoesController extends Controller
{
    public function index()
    {
        //$pedidos = Pedido::orderBy('id')->get();

        $pedidos =  DB::select(" SELECT
                u.name as nome,
                u.email,
                po.descricao,
                pe.*
         FROM pedidos pe inner join users u on(pe.user_id = u.id) inner join produtos po 
         on(pe.produto_id =  po.id)
         WHERE pe.status in('criado','confirmado') order by pe.id asc ");

        return view('adm.solicitacoes.index', compact('pedidos'));

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $membro = UserDados::findOrFail($id);
        return view('adm.solicitacoes.show',compact('membro'));
    }

    public function edit($id)
    {
        $membro= UserDados::find($id);
        return view('adm.solicitacoes.edit',compact('membro'));
    }

    public function update(Request $request, $id)
    {

        UserDados::find($id)->update($request->all());
        return redirect()->route('membros')
                        ->with('success','Dados alterados com sucesso!');
    }

    public function destroy($id)
    {
        //
    }
}
