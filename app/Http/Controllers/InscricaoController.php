<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;

class InscricaoController extends Controller
{
    public function index()
    {
       return view('inscricao');
    }

    public function store(Request $request)
    {
        //
    }

}
