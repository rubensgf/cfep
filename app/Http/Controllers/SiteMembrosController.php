<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDados;
use App\User;

class SiteMembrosController extends Controller
{
    public function index()
    {
        return view('consultaInscritos');
    }

    public function show($id)
    {
      
        $membro = User::join('user_dados', 'users.id', 'user_dados.user_id')
        ->select('users.email', 'user_dados.*')
        ->where('users.ativo', 1)->first();
        
        if(!$membro){
  
          $membro = User::join('user_dados', 'users.id', 'user_dados.user_id')
            ->select('users.email', 'user_dados.*')
            ->where('users.ativo', 1)
            ->where('user_dados.ncarteirinha', $id)
            ->first();
        }
        
        return response()->json($membro);
    }

}
