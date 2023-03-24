<?php

namespace App\Http\Controllers;

use App\Models\TipoLancamento;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TipoLancamentoController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function findAll(): JsonResponse
    {
        $tipoLancamentos = TipoLancamento::all();
        return response()->json($tipoLancamentos, 200);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function find($id): JsonResponse
    {
        try {
            $tipoLancamento = TipoLancamento::findOrfail($id);
            return response()->json($tipoLancamento);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error'], 404);
        }
    }
}
