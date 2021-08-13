<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidade;
use App\Pedido;
use Illuminate\Support\Env;

class SitePagamentoController extends Controller
{
    public function index(Request $request, $id1, $id2) //$membro_id, $produto_id, $pedido_id
    {

        $user_id = $id1;
        $produto_id = $id2;
       // $pedido_id = $id3;

        //membro = Membro::findOrFail($id);

       //return view('pagamentos');

        return view('pagamento',compact('user_id', 'produto_id'));
    }


    public function store(Request $request, $id, $id2){



       // $membro_id = $request->get('membro_id');
       // $produto_id = $request->get('produto_id');
        $user_id = $id;
        $produto_id = $id2;
        $valor = '100.00';

            $pedido = new Pedido([
                'membro_id' => $membro_id,
                'produto_id' => $membro_id,
                'valor' => $valor
            ]);
            $pedido->save();
            $pedido_id = $pedido->id;
dd($pedido_id);

            $pedido_id = $request->input('id');

            //$pedido = Pedido::findOrFail($id);

            $membro_id = 1231;
            $descricao = 'assinatira anual';
            $total = '1.00';
            $pedido_id = 1234;

            //Definindo as credenciais
            $email =  env('EMAIL_PS');
            $token = env('TOKEN_PS');

            //URL da chamada para o PagSeguro
            $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?email=" .$email ."&token=".$token;
            // POST https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?{{credenciais}}



            $data['currency'] = 'BRL';
            $data['itemId1'] = '1';
            $data['itemQuantity1'] = '1';
            $data['itemDescription1'] = $descricao . '-' . $membro_id;
            $data['itemAmount1'] = $total;
            $data['reference'] = $pedido_id;

            //Transformando os dados da compra no formato da URL separados por & comercial
            $data = http_build_query($data);

            //Realizando a chamada
            $curl = curl_init($url);

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            $xml = curl_exec($curl);

            //liberar espaco na memoria
            curl_close($curl);

            $xml = simplexml_load_string($xml);


            return redirect('https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml->code);



    }
}
