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

    public  static function gerarToken($id, $id2){
      
            $user_id = $id;
            $produto_id = $id2;
    
            $produto = Produto::where('id', $produto_id)->first();
            if(!$produto){
                dd('erro produto');
            }
            
            $pedido = new Pedido([
                'user_id' => $user_id,
                'produto_id' => $produto_id,
                'valor' => $produto->valor
            ]);
            $pedido->save();
            $pedido_id = $pedido->id;
    
            $descricao = $produto->descricao;
            $total = $produto->valor;
    
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

            $token = $xml->code;

            //dd($token);
    
    
            return $xml->code;;

        }

}
