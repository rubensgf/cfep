<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membro;

class USR2viaController extends Controller
{
    public function index(Request $request, $id)
    {
    
        $user_id = $id;
        $produto_id = 2;
 
        return redirect()->route('pagamentos', [$user_id, $produto_id]);

    }

}
