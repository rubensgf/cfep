<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidade;
use App\Pedido;
use Illuminate\Support\Env;

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


    public function store(Request $request, $id){

            $pedido_id = $request->input('id');

            //$pedido = Pedido::findOrFail($id);

            $membro_id = 1231;
            $descricao = 'assinatira anual';
            $total = 100.00;
            $pedido_id = 1234;

            //Definindo as credenciais
            $data['email'] =  env('EMAIL_PS');
            $data['token'] = env('TOKEN_PS');

            $data['currency'] = 'BRL';
            $data['itemId1'] = '1';
            $data['itemQuantity1'] = '1';
            $data['itemDescription1'] = $descricao . '-' . $membro_id;
            $data['itemAmount1'] = $total;
            $data['reference'] = $pedido_id;

            //Transformando os dados da compra no formato da URL separados por & comercial
            $data = http_build_query($data);

            //URL da chamada para o PagSeguro
            $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
            //$url = env('LINK_PS');

            //Realizando a chamada
            $curl = curl_init($url);
            //curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            $xml = curl_exec($curl);
            //liberar espaco na memoria
            curl_close($curl);

            //transforma em string simple
            $xml = simplexml_load_string($xml);
            $cod = strval($xml->code);

            return response()->json(array('cod'=> $cod), 200);

    }
}
