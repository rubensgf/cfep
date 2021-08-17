<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDados;

class SiteMembrosController extends Controller
{
    public function index()
    {
        return view('consultaInscritos');
    }

    public function show($id)
    {
      
        $membro = UserDados::where('cpf', $id)->where('ativo','1')->first();
        
        if(!$membro){
            $membro = UserDados::where('ncarteirinha', $id)->where('ativo','1')->first();
        }
        
        return response()->json($membro);
    }

}
