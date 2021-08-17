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
         WHERE pe.status in('criado','confirmado') order by pe.id asc ");

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
        $membro = UserDados::findOrFail($id);
     

        return view('adm.solicitacoes.showMembro',compact('membro'));
    }
    public function showEntidades($id)
    {
        $entidade = Entidade::findOrFail($id);
        return view('adm.solicitacoes.showEntidade',compact('entidade'));
    }

    public function updateMembros(Request $request, $id)
    {

        UserDados::find($id)->update($request->all());
        //$membro= UserDados::find($id);
        //dd($membro);
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
