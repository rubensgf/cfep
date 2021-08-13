<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesquisa;

class PesquisaController extends Controller
{
    public function index()
    {
        //$membros = Pesquisa::orderBy('nome')->get();

        return view('adm.pesquisa.index');

    }

}
