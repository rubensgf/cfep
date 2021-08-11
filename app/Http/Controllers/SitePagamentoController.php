<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidade;

class SitePagamentoController extends Controller
{
    public function index(Request $request, $id1, $id2, $id3) //$membro_id, $produto_id, $pedido_id
    {

        $membro_id = $id1;
        $produto_id = $id2;
        $pedido_id = $id3;

        //membro = Membro::findOrFail($id);

       //return view('pagamentos');

        return view('pagamento',compact('membro_id', 'produto_id', 'pedido_id'));
    }


}
