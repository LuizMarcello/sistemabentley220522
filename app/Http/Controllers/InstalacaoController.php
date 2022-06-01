<?php

namespace App\Http\Controllers;

use App\Models\Instalacao;
use Illuminate\Http\Request;

class InstalacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "cheguei até aqui";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Instalacao  $instalacao
     * @return \Illuminate\Http\Response
     */
    public function show(Instalacao $instalacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instalacao  $instalacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Instalacao $instalacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instalacao  $instalacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instalacao $instalacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instalacao  $instalacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instalacao $instalacao)
    {
        //
    }
}
