<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\CepService;
use App\Http\Requests;
use Illuminate\Http\Request;

class CepController extends Controller
{
    public function __invoke($cep, CepService $cepService)
    {
        return $cepService->consultar($cep);
    }
}
