<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;

class SiteMembrosController extends Controller
{
    public function index()
    {
        return view('consultaInscritos');
    }

    public function show($id)
    {
        $membro = Membro::where('cpf', $id)->first();
        if(!$membro){
            $membro = Membro::where('id', $id)->first();
        }
        return response()->json($membro);
    }

}
