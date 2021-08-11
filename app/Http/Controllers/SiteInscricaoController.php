<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;
use App\Pedido;

class SiteInscricaoController extends Controller
{
    public function index()
    {
        return view('inscricao');
    }

    public function store(Request $request)
    {

        /*$e = new Membro([
            'nome' => $request->input('evento_sessoes_id'),
            'nomeM' => $request->input(''),
            'nomeP' => $request->input(''),
            'dataNasc' => $request->input(''),
            'sexo' => $request->input(''),
            'rg' => $request->input(''),
            'cpf' => $request->input(''),
            'endereco' => $request->input(''),
            'uf' => $request->input(''),
            'foneF' => $request->input(''),
            'fone' => $request->input(''),
            'email' => $request->input(''),
            'expedido' => $request->input(''),
            'validade' => $request->input(''),
            'situacao' => $request->input(''),
            'graduacao' => $request->input(''),
            'universidade' => $request->input(''),
            'dataFormacao' => $request->input('')
          ]);

          $e->save();

          //gerar o pedido
        $p = new Pedido([
            'membro_id' => $membro_id,
            'produto_id' = $produto_id,
            'valor' = $valor_id,
        ]);
        $p->save();*/

        $membro_id = 122324342;
        $produto_id = 1;
        $pedido_id = 2;
          return redirect()->route('pagamento', [$membro_id, $produto_id, $pedido_id]);

    }

}
