<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;

class SiteQrcodeController extends Controller
{
    public function show($id)
    {
        $membro = Membro::where('uuid', $id)->first();

        return view('consultaQrcode', compact('membro'));
    }
}
