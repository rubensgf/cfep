<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDados;
use App\UserFiles;
use App\User;
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
                po.nome as produto,
                pe.*
         FROM pedidos pe inner join users u on(pe.user_id = u.id) inner join produtos po 
         on(pe.produto_id =  po.id)
         WHERE pe.status in('aguardando','confirmado')  and pe.situacao in('aguardando','grafica','enviado') order by pe.id asc ");

        $entidades = Entidade::where('ativo','0')->whereNull('expedido')->orderBy('id')->get();

        return view('adm.solicitacoes.index', compact('pedidos', 'entidades'));

    }

    public function store(Request $request)
    {
        //
    }

    

    public function edit($id)
    {
        $membro= UserDados::find($id);
        return view('adm.solicitacoes.edit',compact('membro'));
    }

   
    
    public function show($id)
    {
        $pedido_id = $id;

        $pedido = Pedido::findOrFail($id);

        $membro = UserDados::findOrFail($pedido->user_id);
        

        return view('adm.solicitacoes.show',compact('membro', 'pedido_id','pedido'));
    }

    public function showMembros($id)
    {
        
        $pedido_id = $id;
        $pedido = Pedido::findOrFail($id);
        $membro = UserDados::findOrFail($pedido->user_id);
        $user = User::select('email')->findOrFail($pedido->user_id);

        $arquivos = UserFiles::where('user_id', $pedido->user_id)->first();

        return view('adm.solicitacoes.showMembro',compact('membro', 'pedido_id', 'arquivos', 'pedido', 'user'));
    }

    public function showEntidades($id)
    {
        $entidade = Entidade::findOrFail($id);
        return view('adm.solicitacoes.showEntidade',compact('entidade'));
    }

    //soliciacoes 2via
    public function update(Request $request, $id)
    {
        $pedido_id = $id;
        $situacao = $request->get('situacao');
        $status =  $request->get('status');

        //se for pagamento manual
        if($status == 'confirmado'){

            

            $pedido = Pedido::where('id',$pedido_id)->first();
            $user_id = $pedido->user_id;
            $pedido->status = 'confirmado'; //pagamento
            $pedido->save();

            $numero_vias = UserDados::where('user_id',$user_id)->select('numero_vias as count','numero_vias')->first();
            $total_vias =  $numero_vias->count + 1;
           
            $pedido = UserDados::where('user_id',$user_id)->first();
            $pedido->numero_vias  = $total_vias;
            $pedido->save();   

            return redirect()->route('solicitacoes')
                        ->with('success','Dados alterados com sucesso!');
        }

        //cancelar pedido da 2via caso nao tenha sido pago
        if($request->get('status')){
            //arquivo a solicitacao pq nao foi paga
            $pedido = Pedido::where('id',$pedido_id)->first();
            $pedido->situacao = 'finalizado';
            $pedido->status = 'cancelado';
            $pedido->save();

            return redirect()->route('solicitacoes')
                        ->with('success','Dados alterados com sucesso!');
        }

        //alterar o status do pedido da solicitacao para (grafica ou enviado)
        $pedido = Pedido::where('id',$pedido_id)->first();
        $user_id = $pedido->user_id;
        $pedido->situacao = $situacao; //grafica ou enviado
        $pedido->save();

        return redirect()->route('solicitacoes')
                        ->with('success','Dados alterados com sucesso!');
    }

    //membros
    public function updateMembros(Request $request, $id)
    {

        $pedido_id = $id;
        $auditado = $request->get('auditado');
        $ativo = $request->get('ativo');

        //pagamento manual, altera o status e coloca a data expedido /vigencia. Mas ainda precisa ser autitado
        if($request->get('status') === 'confirmado'){
            
            $expedido = date("Y-m-d");
            $vigencia = date('Y-m-d', strtotime('+1 year'));

            

            $pedido = Pedido::where('id',$pedido_id)->first();
            $user_id = $pedido->user_id;
            $pedido->situacao = 'aguardando';
            $pedido->status = 'confirmado';
            $pedido->save();

            

            //adcionar a data de videncia
            $userDados = UserDados::where('id',$user_id)->first();
            $userDados->expedido =  $expedido;
            $userDados->vigencia = $vigencia;
            $userDados->save();

            //dd($expedido, $vigencia);

            return redirect()->route('solicitacoes')
                        ->with('success','Dados alterados com sucesso!');
        }

        //cancelar pedido caso nao tenha sido pago
        if($request->get('status') === 'cancelado'){
            
            $pedido = Pedido::where('id',$pedido_id)->first();
            $user_id = $pedido->user_id;
            $pedido->situacao = 'finalizado';
            $pedido->status = 'cancelado';
            $pedido->save();
            
            //atualiza o status do usuaio para 3 - cancelado
            $user_dados = User::where('id', $user_id)->first();
            $user_dados->ativo = '3';
            $user_dados->save();

            return redirect()->route('solicitacoes')
                        ->with('success','Dados alterados com sucesso!');
        }

       //pedido foi auditado
        $pedido = Pedido::where('id',$pedido_id)->first();
        $user_id = $pedido->user_id;
        $pedido->situacao = 'finalizado';
        $pedido->save();

        $user_dados = UserDados::where('user_id', $user_id)->first();
        $user_dados->auditado = $auditado; //1 - ativo, 2 - bloquear
        $user_dados->save();

        $user_dados = User::where('id', $user_id)->first();
        $user_dados->ativo = $ativo;
        $user_dados->save();

        return redirect()->route('solicitacoes')
                        ->with('success','Dados alterados com sucesso!');
    }

    public function updateEntidades(Request $request, $id)
    {

        $e = Entidade::find($id);
        $e->ativo = $request->input('ativo');
        $e->expedido =  date("Y-m-d");
        $e->vigencia = date('Y-m-d', strtotime('+1 year'));
        $e->save();
        
        return redirect()->route('solicitacoes')
                       ->with('success','Dados alterados com sucesso!');
    }
}
