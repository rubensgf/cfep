<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;
use App\Pedido;
use App\User;
use App\UserDados;
use App\UserFiles;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SiteInscricaoController extends Controller
{
    public function index()
    {
        return view('inscricao');
    }

    public function store(Request $request)
    {

        //cadastra usuario
        $user_id = Str::uuid()->toString();
        $ncarteirinha =  date("Y") . substr(str_shuffle("0123456789"), 0, 5);
        $produto_id = 1;

       $u = new User([
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'user'
        ]);
        $u->save();
        $user_id = $u->id;

//$user_id = 5;
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
            'foto' => $request->input('foto'),
            //'naturalidade' => $request->input('naturalidade'),
            //'naturalidade_uf' => $request->input('naturalidade_uf'),
            //'doador' => $request->input('doador'),
        ]);
        $ud->save();

        $ud = new UserFiles([
            'user_id'  => $user_id,
            //'ficha' => $request->input('arq_ficha'),
            'diploma'  => $request->input('arq_diploma'),
            'diploma_verso'  => $request->input('arq_diploma_verso'),
            'rg'  => $request->input('arq_rg'),
            'cpf'  => $request->input('arq_cpf'),
            'titulo' => $request->input('arq_titulo'),
            'comprovante'  => $request->input('arq_comprovante')
        ]);
        $ud->save();

/*
          //gerar o pedido
        $p = new Pedido([
            'membro_id' => $membro_id,
            'produto_id' = $produto_id,
            'valor' = $valor_id,
        ]);
        $p->save();*/

        return redirect()->route('pagamento', [$user_id, $produto_id]);

    }

}
