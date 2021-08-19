<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;
use App\Pedido;

class Pagamento extends Model
{
    protected $fillable = [
        'pedido_id',
        'membro_id',
        'produto_id',
        'transaction_id',
        'status'
    ];

    public  static function gerarToken($id, $id2,$id3,$id4, $id5){ // user, produto, reference, descricao, total
      
            $user_id = $id;
            $produto_id = $id2;
            $referencia = $id3;
            $descricao = $id4;
            $total = $id5;
    
            $email = env('EMAIL_PS');
            $token = env('TOKEN_PS');
    
            $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout?email=" .$email ."&token=".$token;
    
            $data['currency'] = 'BRL';
            $data['itemId1'] = '1';
            $data['itemQuantity1'] = '1';
            $data['itemDescription1'] = $descricao . '-' . $user_id;
            $data['itemAmount1'] = $total;
            $data['reference'] = $referencia;
    
            $data = http_build_query($data);
    
            $curl = curl_init($url);
    
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    
            $xml = curl_exec($curl);
    
            curl_close($curl);
    
            $xml = simplexml_load_string($xml);

            return $xml->code;;

        }

}
