<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDados;

class SiteQrcodeController extends Controller
{
    public function show($id)
    {

        $membro = UserDados::where('ncarteirinha', $id)->get();


        return view('consultaQrcode', compact('membro'));
    }
}
