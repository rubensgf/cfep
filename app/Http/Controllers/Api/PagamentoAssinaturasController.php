<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\AssinaturaUsers;
use Auth;


class PagamentoAssinaturasController extends Controller
{
    
    public function call(){
        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg), 200);
    }

    public function pagcartao(Request $request){

        $assinaturas_id = $request->input('id'); 
        
        $pesq = DB::table('assinaturas')
        ->where('id', '=', $assinaturas_id)
        ->get(); 

        if($pesq) {
            foreach ($pesq as $i) {

                $dsAssinatura = $i->dsTitulo;
                $total = $i->dsValorTotal;
            }
        } else return 'error. tente novamente mais tarde ';
       

        $rec = new AssinaturaUsers([
            'users_id' => Auth::user()->id,
            'remember_token'=> Auth::user()->remember_token,
            'assinaturas_id' => $assinaturas_id,
            'assinatura_status_id' => 1,
            'dtCompra' =>  date('Y-m-d H:i:s'),
            'dtValidade' => date('Y-m-d H:i:s')
        ]);
        $rec->save();
        $assinatura_users_id = $rec->id;


        //Definindo as credenciais
        $data['email'] = "rubensgf@gmail.com";
        $data['token'] = "B9D1C71BCB454FF69E2B18792E3E329F";
       
        $data['currency'] = 'BRL';
        $data['itemId1'] = '1'; 
        $data['itemQuantity1'] = '1';
        $data['itemDescription1'] = $dsAssinatura . '-' . $assinatura_users_id;
        $data['itemAmount1'] = $total;
        $data['reference'] = $assinatura_users_id;
        
        //Transformando os dados da compra no formato da URL separados por & comercial
        $data = http_build_query($data);
   
        //URL da chamada para o PagSeguro
        $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
       
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

       /* $response = array(
            'status' => 'success',
            'cod' => $cod,
        );
        return \Response::json($response);
       */

        
        return response()->json(array('cod'=> $cod), 200);

    }



    public function  notification(Request $request){

        $notificationCode = $request->input('notificationCode'); 

        //Definindo as credenciais
        $data['email'] = "rubensgf@gmail.com";
        $data['token'] = "B9D1C71BCB454FF69E2B18792E3E329F";
        
        $data = http_build_query($data);

        $url = 'https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/notificationCode/'.$notificationCode.'?'.$data;
        
        //Realizando a chamada
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        $xml = curl_exec($curl);
        //liberar espaco na memoria
        curl_close($curl);

        //transforma em string simple 
        $xml = simplexml_load_string($xml);

        $reference = $xml->reference;
        $status = $xml->status;

        if($reference && $status) {
            //verifica se tem essa assinatura
            $result = DB::table('assinatura_users')
            ->where('id', '=', $reference)
            ->get(); 

            if($result){

                //busca o tempo de vigencia do plano
                $rs_vigencia = DB::select("SELECT A.qtDias FROM assinatura_users AU inner join assinaturas A 
                on(A.id = AU.assinaturas_id ) where Au.id = $reference ");
  
                foreach ($rs_vigencia as $i ) {
                    $dtDias = '+'.$i->dtDias. ' days';  
                }  
            
                //atualizar
                $e = Assinatura_users::find($reference);
                $e->assinatura_status_id = $status;
                $e->dtValidade = $date('Y-m-d', strtotime($dtDias));
                $e->save(); 

                //se status for 3 pago, colocar a validade do plano
            }
        }
        

        return void();

    }


   

    public function index($id){

        $assinaturas_id = $id;

        $result = DB::table('assinaturas')
        ->where('id', '=', $assinaturas_id)
        ->get(); 

        if($result) {
            foreach ($result as $i) {
                $dsAssinatura = $i->dsTitulo;
                $total = $i->dsValorTotal;
            }
        } else return 'error. tente novamente mais tarde ';

    

        $rec = new AssinaturaUsers([
            'users_id' => Auth::user()->id,
            'remember_token'=> Auth::user()->remember_token,
            'assinaturas_id' => 1,
            'assinatura_status_id' => 1,
            'dtCompra' =>  date('Y-m-d H:i:s'),
            'dtValidade' => date('Y-m-d H:i:s')
        ]);
        $rec->save();
        $assinatura_users_id = $rec->id;

        //Definindo as credenciais
        $$data['email'] = "rubensgf@gmail.com";
        $$data['token'] = "ec60b17f-5a83-41b3-8871-52d7c1e888190dfe1bf7443b917503daa5db32cfce341446-9ecb-4ae8-b4c7-9ae3f2e7e96d";
        
        $data['email'] = "rubensgf@gmail.com";
        $data['token'] = "B9D1C71BCB454FF69E2B18792E3E329F";
        $data['currency'] = 'BRL';
        $data['itemId1'] = '1'; 
        $data['itemQuantity1'] = '1';
        $data['itemDescription1'] = $dsAssinatura . '-' . $assinatura_users_id;
        $data['itemAmount1'] = $total;
        $data['reference'] = $assinatura_users_id;
        
        //Transformando os dados da compra no formato da URL
        $data = http_build_query($data);
   
        //URL da chamada para o PagSeguro
        $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
       
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

        dd($xml);

        $xml = simplexml_load_string($xml);

        return redirect('https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code='.$xml->code);

    }    
}

/*
$notificationCode = preg_replace('/[ˆ[:alnum]-]/','', $request->input('noticicationCode'));
  
        //Definindo as credenciais
        $data['token'] = "zznebur@hotmail.com";
        $data['email'] = "B362AD86E227452EBC2B1E53CECB8394";
        
        //Transformando os dados da compra no formato da URL
        $data = http_build_query($data);

         //URL da chamada para o PagSeguro
        $url = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/" .$notificationCode .'?'.$data;
        
        //Realizando a chamada
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);

        $xml = curl_exec($curl);

        //liberar espaco na memoria
        curl_close($curl);

        $xml = simplexml_load_string($xml);

        $reference = $xml->reference;
        $status = $xml->status;

        if($reference and $status) {
            //verifica se existe a assinatura
            $result = DB::table('assinatura_users')
            ->select('assinatura_users.id')
            ->where('assinatura_users_id', '=', $reference)
            ->get(); 

            if($result) {
                //Atualizar a qtd de inscritos
                $e = AssinaturaUsers::find($reference);
                $e->assinatura_status_id = $status;
               //dd($e);
                $e->save();
            }

        }
        return void;
    } */