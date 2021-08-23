<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;
use App\Produto;
use App\Pedido;
use \MercadoPago;


class USR2viaController extends Controller
{
    public function index(Request $request, $id)
    {
    
        $user_id = $id;
        $produto_id = 2;
        $produto = Produto::where('id', $produto_id)->first();

        $referencia =  substr(str_shuffle("0123456789"), 0, 6);
        $token = env('MERCADOPAGO_TOKEN');

        $pedido = new Pedido([
            'user_id' => $user_id,
            'produto_id' => $produto_id,
            'valor' => $produto->valor,
            'referencia' => $referencia
        ]);
        $pedido->save();
        $pedido_id = $pedido->id;

        MercadoPago\SDK::setAccessToken($token);

        $preference = new MercadoPago\Preference();

        $item = new MercadoPago\Item();
        $item->id = $produto->id;
        $item->title = $produto->nome; 
        $item->quantity = 1;
        $item->unit_price = (double)$produto->valor;

        $preference->items = array($item);

        $preference->back_urls = array(
            "success" => 'https://cfepmembros.com.br/success',
            "failure" => 'https://cfepmembros.com.br/failure',
            "pending" => 'https://cfepmembros.com.br/pending',

        );

        $preference->notification_url = 'https://cfepmembros.com.br/webhook';
        $preference->external_reference = $referencia;
        $preference->save();

        $link = $preference->init_point;

        


        return view('pagamento', compact('user_id', 'produto_id', 'link','produto'));

 
        //return redirect()->route('pagamentos', [$user_id, $produto_id]);

    }

}
