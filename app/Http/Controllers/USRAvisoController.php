<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class USRAvisoController extends Controller
{
    public function index()
    {
    
        $membro = User::join('user_dados', 'users.id', 'user_dados.user_id')
        ->select('users.email', 'users.ativo', 'user_dados.*')
        ->where('users.id', Auth::user()->id)
        ->first();

    
        return view('user.aviso.index', compact('membro'));

    }

}
