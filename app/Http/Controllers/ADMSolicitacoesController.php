<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;
use App\Pedido;

class ADMSolicitacoesController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::orderBy('id')->get();


        return view('adm.solicitacoes.index', compact('pedidos'));

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $membro = Membro::findOrFail($id);
        return view('adm.solicitacoes.show',compact('membro'));
    }

    public function edit($id)
    {
        $membro= Membro::find($id);
        return view('adm.solicitacoes.edit',compact('membro'));
    }

    public function update(Request $request, $id)
    {

        Membro::find($id)->update($request->all());
        return redirect()->route('membros')
                        ->with('success','Dados alterados com sucesso!');
    }

    public function destroy($id)
    {
        //
    }
}
