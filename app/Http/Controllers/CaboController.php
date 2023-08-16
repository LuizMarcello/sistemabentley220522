<?php

namespace App\Http\Controllers;

use App\Models\Cabo;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\CaboRequest;
use Symfony\Component\HttpFoundation\Response;

class CaboController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return View
    *
    * Aplicando o "Route Model Binding" do laravel,
    * que está injetando uma instância do Model como
    * parâmetro.
    * Isto já vai tornar meu Model "Cabo" filtrado
    * e dísponivel dentro da view retornada.
    *
    * @param \App\Models\Cabo $cabo
    * @param \App\Http\Requests\CaboRequest $request
    */
    public function index(CaboRequest $request, Cabo $cabos): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $cabos = Cabo::paginate(5);
        return view('cabo.indexCabo', \compact('cabos'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('cabo.createCabo');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \App\Http\Requests\CaboRequest
    * @return Response
    */
    public function store(CaboRequest $request): Response
    {
        $registro = Cabo::create($request->all());
        return \redirect()->route('cabos.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Cabo $cabo
    * @return View
    */
    public function show(Cabo $cabo): View
    {
        return view('cabo.showCabo', \compact('cabo'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Cabo $cabo
    * @return View
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */
    public function edit(Cabo $cabo): View
    {
        return view('cabo.editCabo', \compact('cabo'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Cabo $cabo
    * @param \App\Http\Requests\CaboRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "CaboRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(CaboRequest $request, Cabo $cabo): Response
    {
        $cabo->update($request->all());
        return \redirect()->route('cabos.index', $cabo);
    }

   /**
   * Remove the specified resource from storage.
   *
   * Aplicando o "Route Model Binding" do laravel
   * @param \App\Models\Cabo $cabo
   * @return \Illuminate\Http\Response
   * A
   */
    public function destroy(Cabo $cabo): Response
    {
        $cabo->delete();
        return \redirect()->route('cabos.index');
    }
}
