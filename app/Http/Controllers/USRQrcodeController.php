<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class USRQrcodeController extends Controller
{
    public function index() {
        $user_id = Auth::id();

        $dados = DB::table('user_dados')
        ->where('user_dados.user_id', '=', $user_id)
        ->first();

        return view('user.qrcode.show', compact('dados'));

    }
}
