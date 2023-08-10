<?php

namespace App\Http\Controllers;

use App\Models\Historico;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\HistoricoRequest;
use Symfony\Component\HttpFoundation\Response;
class HistoricoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return View
    *
    * Aplicando o "Route Model Binding" do laravel,
    * que está injetando uma instância do Model como
    * parâmetro.
    * Isto já vai tornar meu Model "Historico" filtrado
    * e dísponivel dentro da view retornada.
    *
    * @param \App\Models\Historico $historicos
    * @param\App\Http\Requests\HistoricoRequest $request
    */
    public function index(HistoricoRequest $request, Historico $historicos): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $historicos = Historico::latest()->paginate(5);
        return view('historico.index', compact('historicos'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('historico.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \App\Http\Requests\HistoricoRequest
    * @return Response
    */
    public function store(HistoricoRequest $request): Response
    {
        $registro = Historico::create($request->all());
        return \redirect()->route('historicos.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Historico $historico
    * @return View
    */
    public function show(Historico $historico): View
    {
        return view('historico.show', compact('historico'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Historico $historico
    * @return View
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */
    public function edit(Historico $historico): View
    {
       return view('historico.edit', compact('historico'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Historico $historicos
    * @param \App\Http\Requests\HistoricoRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "HistoricoRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(HistoricoRequest $request, Historico $historico): Response
    {
        $historico->update($request->all());
        return \redirect()->route('historicos.index', $historico);
    }

    /**
    * Remove the specified resource from storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Historico $historicos
    * @return \Illuminate\Http\Response
    *
    */
    public function destroy(Historico $historicos): Response
    {
         $historicos->delete();
         return \redirect()->route('historicos.index');
    }
}
