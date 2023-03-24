<?php

namespace App\Http\Controllers;

use App\Models\Lancamento;
use Illuminate\Http\Request;

class LancamentoController extends Controller
{
    public function findAll()
    {
        $lancamentos = Lancamento::all();
        response()->json($lancamentos, 200);
    }
}
