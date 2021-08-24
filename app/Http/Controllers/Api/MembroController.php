<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Membro;
use App\UserDados;
use App\Entidade;

class MembroController extends Controller
{

    public function indexCpf($id)
    {
        $user_dados = UserDados::where('cpf', $id)->first();

        $cpf = 'true';
        if($user_dados ){
            $cpf = 'false';
        }

        return $cpf;
    }

    public function indexCnpj($id)
    {
        $dados = Entidade::where('cnpj', $id)->first();

        $cnpj = 'true';
        if($dados ){
            $cnpj = 'false';
        }

        return $cnpj;
    }
}
