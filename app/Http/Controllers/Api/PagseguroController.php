<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssinaturaUsers;


class PagseguroController extends Controller
{

   
    public function index()
    {
 
        
        $rec = new AssinaturaUsers([
            'users_id' => Auth::user()->id,
            'remember_token'=> Auth::user()->remember_token,
            'assinaturas_id' => 1,
            'assinatura_status_id' => 1,
            'dtCompra' =>  date('Y-m-d H:i:s'),
            'dsValidade' => date('Y-m-d H:i:s')
        ]);
      //dd($rec);
        $rec->save();
        $assinatura_users_id = $rec->id;


  
        //Definindo as credenciais
        $email = "zznebur@hotmail.com";
        $token = "B362AD86E227452EBC2B1E53CECB8394";
        
        //URL da chamada para o PagSeguro
        $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?email=" .$email ."&token=".$token;
        // POST https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?{{credenciais}}
        
        //Dados da compra
        $data['currency'] = 'BRL';
        $data['itemId1'] = '1'; 
        $data['itemQuantity1'] = '1';
        $data['itemDescription1'] = 'Assinatura - plataforama fornadas'.$assinatura_users_id;
        $data['itemAmount1'] = '99.00';
        $data['reference'] = $assinatura_users_id;
        
        //Transformando os dados da compra no formato da URL
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

        //dd($xml->code);
        

        return redirect('https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml->code);
        
        //Caso o HTTP for 200 será criada a URL de pagamento
        //echo '<a href="https://pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml->code.'">Ir para o Checkout</a>';


    }

    

}