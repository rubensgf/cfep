<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entidade;
use Illuminate\Support\Facades\Auth;
use DB;

class USRCertificadoController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        $dados = DB::table('membros')
        ->where('membros.user_id', '=', $user_id)
        ->first();

        return view('user.certificado.show',compact('dados'));
    }

}
