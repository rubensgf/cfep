<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidade;
use App\Pedido;
use App\User;
use App\Produto;
use Illuminate\Support\Env;
use DB;

class SitePagamentoController extends Controller
{
    public function index(Request $request, $id1, $id2) //$user_id, $produto_id, $pedido_id
    {

        $user_id = $id1;
        $produto_id = $id2;
        //$referencia = $id3;

        $user = User::where('id', $id1)->first();
        if(!$user){
            dd('erro');
        }

        $produto = Produto::where('id', $id2)->first();
        if(!$produto){
            dd('erro produto');
        }

        return view('pagamento',compact('user_id', 'produto_id', 'produto'));
    }


    public function store(Request $request, $id, $id2){ //user_id , produto_id

        $user_id = $id;
        $produto_id = $id2;

        $produto = Produto::where('id', $produto_id)->first();
        if(!$produto){
            dd('erro produto');
        }
        $descricao = $produto->descricao;
        $total = $produto->valor;
        
        $referencia =  substr(str_shuffle("0123456789"), 0, 5);

        $pedido = new Pedido([
            'user_id' => $user_id,
            'produto_id' => $produto_id,
            'valor' => $produto->valor,
            'referencia' => $referencia
        ]);
        $pedido->save();
        $pedido_id = $pedido->id;

       
        //Definindo as credenciais
        $email =  env('EMAIL_PS');
        $token = env('TOKEN_PS');

        //URL da chamada para o PagSeguro
        $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?email=" .$email ."&token=".$token;
        // POST https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?{{credenciais}}

        $data['currency'] = 'BRL';
        $data['itemId1'] = '1';
        $data['itemQuantity1'] = '1';
        $data['itemDescription1'] = $descricao . '-' . $user_id;
        $data['itemAmount1'] = $total;
        $data['reference'] = $referencia;

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
