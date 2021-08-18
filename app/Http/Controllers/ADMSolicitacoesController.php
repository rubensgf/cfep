<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDados;
use App\Pedido;
use App\Entidade;
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
         WHERE pe.status in('aguardando','confirmado')  and pe.situacao = 'aguardando' order by pe.id asc ");

        $entidades = Entidade::where('ativo','0')->orderBy('id')->get();

        return view('adm.solicitacoes.index', compact('pedidos', 'entidades'));

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

    public function showMembros($id)
    {
        
        $pedido_id = $id;

        $pedido = Pedido::findOrFail($id);

        $membro = UserDados::findOrFail($pedido->user_id);

        return view('adm.solicitacoes.showMembro',compact('membro', 'pedido_id'));
    }
    public function showEntidades($id)
    {
        $entidade = Entidade::findOrFail($id);
        return view('adm.solicitacoes.showEntidade',compact('entidade'));
    }

    public function updateMembros(Request $request, $id)
    {

        $pedido_id = $id;
        $auditado = $request->get('auditado');
        $ativo = $request->get('ativo');

        $pedido = Pedido::find($pedido_id)->first();
        $user_id = $pedido->user_id;
        $pedido->situacao = 'finalizado';
        $pedido->save();

        //$p = Pedido::find($pedido_id)->first();

        //dd($p, $pedido_id);

        $user_dados = UserDados::where('user_id', $user_id)->first();
        $user_dados->auditado = $auditado;
        $user_dados->ativo = $ativo;
        $user_dados->save();

        return redirect()->route('solicitacoes')
                        ->with('success','Dados alterados com sucesso!');
    }

    public function updateEntidades(Request $request, $id)
    {

        Entidade::find($id)->update($request->all());
        //$membro= Entidade::find($id);
        
        return redirect()->route('solicitacoes')
                       ->with('success','Dados alterados com sucesso!');
    }
}
