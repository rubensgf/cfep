<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;
use App\Pedido;
use App\User;
use App\UserDados;
use App\UserFiles;
use App\Produto;
use App\Pagamento;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Validator,Redirect,Response,File;
use App\Http\Requests\FileStoreRequest;
use \MercadoPago;

class SiteInscricaoController extends Controller
{
    public function index()
    {
        return view('inscricao');
    }

    public function store(Request $request)
    {
        

        $ncarteirinha =  date("y") . substr(str_shuffle("0123456789"), 0, 6);
        
        $input_data = $request->all();

        $validator = Validator::make(
            $input_data, [
            'foto' => 'required|mimes:pdf,png,jpg,jpeg|max:2000',
            'arq_ficha' => 'required|mimes:pdf,png,jpg,jpeg|max:2000'
            ],[
                'foto.required' => 'Please upload an image',
                'foto.mimes' => 'Only jpeg,png and bmp images are allowed',
                'foto.max' => 'Sorry! Maximum allowed size for an image is 20MB',
                'arq_ficha.required' => 'Please upload an image',
                'arq_ficha.mimes' => 'Only jpeg,png and bmp images are allowed',
                'arq_ficha.max' => 'Sorry! Maximum allowed size for an image is 20MB',
            ]
        );
       /* dd($request->all());

        //dd($validator->failed());
        dd($validator->errors()->messages());
    
        if ($validator->fails()) {
            //return Redirect::back()->withInput()->withErrors(array(withInput() => $validator->errors()->first()));
            return Redirect::back()->withErrors($messages)->withInput();
        } */

        $foto = $request->file('foto');
        $arq_ficha = $request->file('arq_ficha');
        $arq_diploma = $request->file('arq_diploma');
        $arq_diploma_verso = $request->file('arq_diploma_verso');
        $arq_rg = $request->file('arq_rg');
        $arq_cpf = $request->file('arq_cpf');
        $arq_titulo = $request->file('arq_titulo');
        $arq_comprovante = $request->file('arq_comprovante');
        //arq_diploma

        //dd($arq_ficha, $foto);

        //$request->imagem->getClientSize();

        $name = 'arq_ficha';
        $extension = $request->$name->extension();
        $arq_ficha = "{$name}.{$extension}";
        $upload = $request->$name->storeAs('public/files/'.$ncarteirinha, $arq_ficha);

        $name = 'foto';
        $extension = $request->$name->extension();
        $arq_foto = "{$name}.{$extension}";
        $upload = $request->$name->storeAs('public/files/'.$ncarteirinha, $arq_foto);

        $name = 'arq_diploma';
        $extension = $request->$name->extension();
        $arq_diploma = "{$name}.{$extension}";
        $upload = $request->$name->storeAs('public/files/'.$ncarteirinha, $arq_diploma);

        $name = 'arq_diploma_verso';
        $extension = $request->$name->extension();
        $arq_diploma_verso = "{$name}.{$extension}";
        $upload = $request->$name->storeAs('public/files/'.$ncarteirinha, $arq_diploma_verso);

        $name = 'arq_rg';
        $extension = $request->$name->extension();
        $arq_rg = "{$name}.{$extension}";
        $upload = $request->$name->storeAs('public/files/'.$ncarteirinha, $arq_rg);

        $name = 'arq_cpf';
        $extension = $request->$name->extension();
        $arq_cpf = "{$name}.{$extension}";
        $upload = $request->$name->storeAs('public/files/'.$ncarteirinha, $arq_cpf);

        $name = 'arq_titulo';
        $extension = $request->$name->extension();
        $arq_titulo = "{$name}.{$extension}";
        $upload = $request->$name->storeAs('public/files/'.$ncarteirinha, $arq_titulo);

        $name = 'arq_comprovante';
        $extension = $request->$name->extension();
        $arq_comprovante = "{$name}.{$extension}";
        $upload = $request->$name->storeAs('public/files/'.$ncarteirinha, $arq_comprovante);
    
        //cadastra usuario
        //$user_id = Str::uuid()->toString();
        //$ncarteirinha =  date("Y") . substr(str_shuffle("0123456789"), 0, 5);
        $produto_id = 1;
        $produto = Produto::where('id', $produto_id)->first();

        $u = new User([
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'user',

        ]);
        $u->save();
        $user_id = $u->id;

        $ud = new UserDados([
            'user_id' => $user_id,
            'ncarteirinha' => $ncarteirinha,
            'nome'  => $request->input('nome'),
            'nome_mae'  => $request->input('nome_mae'),
            'nome_pai' => $request->input('nome_pai'),
            'sexo' => $request->input('sexo'),
            'data_nascimento' => $request->input('data_nascimento'),
            'rg' => $request->input('rg'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'celular' => $request->input('celular'),
            'endereco' => $request->input('endereco'),
            'numero' => $request->input('numero'),
            'cidade' => $request->input('cidade'),
            'uf' => $request->input('uf'),
            'cep' => $request->input('cep'),
            'foto' => $arq_foto,
            'naturalidade' => $request->input('naturalidade'),
            'naturalidade_uf' => $request->input('naturalidade_uf'),
            'doador' => $request->input('doador'),
            'status' => '0'
        ]);
        $ud->save();

        $uf = new UserFiles([
            'user_id'  => $user_id,
            'ficha' => $arq_ficha,
            'diploma'  => $arq_diploma,
            'diploma_verso'  => $arq_diploma_verso,
            'rg'  => $arq_rg,
            'cpf'  => $arq_cpf,
            'titulo' => $arq_titulo,
            'comprovante'  => $arq_comprovante
        ]);
        $uf->save();

        $referencia =  substr(str_shuffle("0123456789"), 0, 7);
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


   /*     $referencia =  substr(str_shuffle("0123456789"), 0, 5);

        $pedido = new Pedido([
            'user_id' => $user_id,
            'produto_id' => $produto_id,
            'valor' => $produto->valor,
            'referencia' => $referencia
        ]);
        $pedido->save();
        $pedido_id = $pedido->id;

        $pagamento = new Pagamento();
        //user, produto, reference, descricao, total
        $retorno = $pagamento::gerarToken($user_id, $produto_id, $referencia, $produto->nome, $produto->valor);
*/
        //return redirect()->route('pagamentos', [$user_id, $produto_id, $link]);



    }

}
