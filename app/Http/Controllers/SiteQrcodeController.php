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
        ->select('users.email', 'user_dados.*')
        ->where('user_dados.ncarteirinha', $id)
        ->get();

        return view('consultaQrcode', compact('membro'));
    }
}
