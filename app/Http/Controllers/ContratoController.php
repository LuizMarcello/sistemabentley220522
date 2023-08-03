<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContratoRequest;
use Symfony\Component\HttpFoundation\Response;

class ContratoController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return View
   *
   * Aplicando o "Route Model Binding" do laravel,
   * que está injetando uma instância do Model como
   * parâmetro.
   * Isto já vai tornar meu Model "Contrato" filtrado
   * e dísponivel dentro da view retornada.
   *
   * @param \App\Models\Contrato $contrato
   * @param \App\Http\Requests\ContratoRequest
   *
   */
    public function index(ContratoRequest $request, Contrato $contrato)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $contrato = Contrato::latest()->paginate(5);
        return view('contrato.index', compact('contrato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('contrato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ContratoRequest
     * @return Response
     */
    public function store(ContratoRequest $request): Response
    {
    $registro = Contrato::create($request->all());
    return \redirect()->route('contratos.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Contrato $contrato
    * @return View
    */
    public function show(Contrato $contrato): View
    {
        return view('contrato.show', \compact('contrato'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Contrato $contrato
    * @return View
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */
    public function edit(Contrato $contrato): View
    {
        return view('contrato.view', \compact('contrato'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Contrato $contrato
    * @param \App\Http\Request\ContratoRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "ContratoRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(ContratoRequest $request, Contrato $contrato): Response
    {
        $contrato->update($request->all());
        return \redirect()->route('contratos.index', $contrato);
        /* return \redirect()->route('contratos.index', 'contratos'); */
    }

    /**
    * Remove the specified resource from storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Contrato $contratos
    * @return \Illuminate\Http\Response
    *
    */
    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return \redirect()->route('contratos.index');
    }
}
