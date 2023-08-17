<?php

namespace App\Http\Controllers;

use App\Models\Lnb;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\LnbRequest;
use Symfony\Component\HttpFoundation\Response;

class LnbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Lnb" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @param \App\Models\Lnb $registros
     * @param \App\Http\Requests\LnbRequest $request
     */
    public function index(LnbRequest $request, Lnb $registros): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $registros = Lnb::paginate(5);
        return view('lnb.indexLnb', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('lnb.createLnb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\LnbRequest
     * @return Response
     */
    public function store(LnbRequest $request): Response
    {
        $registro = Lnb::create($request->all());
         return \redirect()->route('lnbs.index', $registro->id);
    }

    /**
     * Display the specified resource.
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Lnb $lnb
     * @return View
     */
    public function show(Lnb $lnb): View
    {
        return view('lnb.showLnb', \compact('lnb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Lnb $lnb
     * @return View
     *
     * O método edit() serve somente para retornar o formulário
     * preenchido com os dados para serem editados, como create() e store().
     */
    public function edit(Lnb $lnb): View
    {
        return view('lnb.editLnb', \compact('lnb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Lnb  $lnb
     * @param \App\Http\Requests\LnbRequest
     * @return \Illuminate\Http\Response
     *
     * Usando a classe "LnbRequest" para validar.
     * o método update() serve para receber esses dados e atualizar
     * no banco de dados, como create() e store().
     *
     */
    public function update(LnbRequest $request, Lnb $lnb): Response
    {
        $lnb->update($request->all());
        return \redirect()->route('lnbs.show', $lnb);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Lnb  $lnb
     * @return \Illuminate\Http\Response
     * A
     */
    public function destroy(Lnb $lnb): Response
    {
        $lnb->delete();
        return \redirect()->route('lnbs.index');
    }
}
