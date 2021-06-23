<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entidade;

class DashboardController extends Controller
{
    public function index()
    {
        $m_ativos = '500';
        $m_pendentes = '200';
        $m_inativos = '2';
        $e_ativos = '10';
        $e_inativos = '4';

        return view('adm.dashboard.index', compact('m_ativos', 'm_pendentes','m_inativos', 'e_ativos','e_inativos'));

    }

}
