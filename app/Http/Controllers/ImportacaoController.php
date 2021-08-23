<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\UserDados;
use App\Membro;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class ImportacaoController extends Controller
{
    public function index()
    {
        //$membros = Pesquisa::orderBy('nome')->get();

        $membros_bk =  DB::select(" SELECT 
                        `foto`, `id`, `nome`, `nomeM`, `nomeP`, `dataNasc`, 
                        `sexo`, `rg`, `cpf`, `endereco`, `uf`, `foneF`, `fone`,
                         `email`, `expedido`, `validade`, `situacao`, 
                         `graduacao`, `universidade`, `dataFormacao`, `observacao`

         FROM membros  order by id asc ");

         foreach ($membros_bk as $value => $k) {
             
            try {
                if($k->situacao = 'Regular'){
                    $ativo = '1';
                    }
                    if($k->situacao = 'Irregular'){
                    $ativo = '2';
                    }
                    if($k->situacao = 'Cancelado'){
                    $ativo = '3';
                    }

                    

                    $end = explode(", ", $k->endereco);
                    $endereco = $end[0];

                    //se nao existir a virgula
                    if(empty($end[1])) {
                        $numero = '';
                    }else {
                        $numero = $end[1];   
                    }
                    
                    if(empty($k->email)){
                           $email =  $value;
                    } else {
                        $email =  $k->email;
                    }

                    $userlst = User::where('email', $email)->first();

                    if($userlst){
                        //atualizar o dado importado 
                        $membro = Membro::where('id',$k->id)->first();
                        $membro->observacao = 'erro';
                        $membro->save();
                        //dd($email);
                    } else {

                        $u = new User([
                            'name' => $k->nome,
                            'email' => $email,
                            'password' => Hash::make($k->cpf),
                            'role' => 'user',
                            'ativo' => $ativo
            
                        ]);
                        $u->save();
                        $user_id = $u->id;

                        $udd = new UserDados([
                            'user_id' => $user_id,
                            'ncarteirinha' => $k->id,
                            'nome'  => $k->nome,
                            'nome_mae'  => $k->nomeM,
                            'nome_pai' => $k->nomeP,
                            'sexo' => $k->sexo,
                            'data_nascimento' => $k->dataNasc,
                            'rg' => $k->rg,
                            'cpf' => $k->cpf,
                            'telefone' => $k->foneF,
                            'celular' => $k->fone,
                            'endereco' => $endereco,
                            'numero' => $numero,
                            //'cidade' => $k->,
                            'uf' => $k->uf,
                            //'cep' => $k->c,
                            'foto' => $k->foto,
                            'graduacao' => $k->graduacao,
                            'universidade' => $k->universidade ,
                            'dataFormacao' => $k->dataFormacao,
                            //'naturalidade',
                            //'naturalidade_uf',
                            //'doador',
                            //'assinatura',
                            'expedido'  =>  date('Y-m-d', strtotime($k->expedido)) ,
                            'vigencia'  => date('Y-m-d', strtotime($k->validade)) ,
                            'auditado'  => 1,
                            'numero_vias' => 1,
                            'legado' => 1
                        ]);
                        $udd->save();
                    }

            } catch (Exception $e) {
                report($e);
        
                continue;
            }

             
            echo $user_id . '<br>';
            
       }



        ///return view('adm.pesquisa.index');

    }
}
