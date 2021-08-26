<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDados;
use App\User;

class SiteQrcodeController extends Controller
{
    public function show($id)
    {

        $membro = User::join('user_dados', 'users.id', 'user_dados.user_id')
        ->select('users.email', 'users.ativo','user_dados.*')
        ->where('users.ativo', '1')
        ->where('user_dados.ncarteirinha', $id)
        ->first();


        return view('consultaQrcode', compact('membro'));
    }
}
