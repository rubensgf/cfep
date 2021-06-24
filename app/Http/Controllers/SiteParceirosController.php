<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidade;

class SiteParceirosController extends Controller
{
    public function index()
    {
       return view('parceiros');
    }

    public function store(Request $request)
    {
        //
    }

}
