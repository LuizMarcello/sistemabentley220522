<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChamadoRequest;
use Symfony\Component\HttpFoundation\Response;

class ChamadoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return View
    *
    * Aplicando o "Route Model Binding" do laravel,
    * que está injetando uma instância do Model como
    * parâmetro.
    * Isto já vai tornar meu Model "Chamado" filtrado
    * e dísponivel dentro da view retornada.
    *
    * @param \App\Models\Chamado $chamado
    * @param\App\Http\Requests\ChamadoRequest $request
    */
    public function index(ChamadoRequest $request, Chamado $chamado): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $chamado = Chamado::latest()->paginate(5);
        return view('chamado.index', compact('chamado'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('chamado.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \App\Http\Requests\ChamadoRequest
    * @return Response
    */
    public function store(ChamadoRequest $request): Response
    {
         $registro = Chamado::create($request->all());
         return \redirect()->route('chamados.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Chamado $chamado
    * @return View
    */
    public function show(Chamado $chamado): View
    {
        return view('chamado.show', \compact('chamado'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Chamado $chamado
    * @return View
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */
    public function edit(Chamado $chamado): View
    {
        return view('chamado.edit', \compact('chamado'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Chamado $chamado
    * @param \App\Http\Requests\ChamadoRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "ChamadoRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(ChamadoRequest $request, Chamado $chamados): Response
    {
        $chamados->update($request->all());
        return \redirect()->route('chamados.index', $chamados);
        /* return \redirect()->route('chamados.index', 'chamados'); */
    }

    /**
    * Remove the specified resource from storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Chamado $chamados
    * @return \Illuminate\Http\Response
    *
    */
    public function destroy(Chamado $chamados): Response
    {
        $chamados->delete();
        return \redirect()->route('chamados.index');
    }
}
