<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $modelocontratos = Contrato::where('cliente', 'LIKE', "%$keyword%")
                ->orWhere('cortesia', 'LIKE', "%$keyword%")
                ->orWhere('desconto', 'LIKE', "%$keyword%")
                ->orWhere('msg_pend_automatica', 'LIKE', "%$keyword%")
                ->orWhere('dias_para_pendencia', 'LIKE', "%$keyword%")
                ->orWhere('acrescimo', 'LIKE', "%$keyword%")
                ->orWhere('msg_bloqueio_automatica', 'LIKE', "%$keyword%")
                ->orWhere('dias_para_bloqueio', 'LIKE', "%$keyword%")
                ->orWhere('dia_de_pagamento', 'LIKE', "%$keyword%")
                ->orWhere('forma_de_pagamento', 'LIKE', "%$keyword%")
                ->orWhere('modelo_de_contrato', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
              } else {
            /* $contrato = Contrato::latest()->paginate($perPage); */
            $contratos = Contrato::latest()->paginate(3);
        }

        return view('contrato.index', compact('contratos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contrato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
