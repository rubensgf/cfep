<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;

class USR2viaController extends Controller
{
    public function index(Request $request, $id)
    {
       // gera a solicitacao do pedido
        $membro_id = $id;
        $produto_id = 1;
       // $pedido_id = 2;


        return redirect()->route('pagamentos', [$membro_id, $produto_id]);

    }

}
