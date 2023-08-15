<?php

namespace App\Http\Controllers;

use App\Models\Ferramenta;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\FerramentaRequest;
use Symfony\Component\HttpFoundation\Response;

class FerramentaController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return View
    *
    * Aplicando o "Route Model Binding" do laravel,
    * que está injetando uma instância do Model como
    * parâmetro.
    * Isto já vai tornar meu Model "Ferramenta" filtrado
    * e dísponivel dentro da view retornada.
    *
    * @param \App\Models\Ferramenta $ferramentas
    * @param \App\Http\Requests\FerramentaRequest $request
    */
    public function index(FerramentaRequest $request, Ferramenta $ferramentas): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $ferramentas = Ferramenta::paginate(5);
        return view('ferramenta.index', \compact('ferramentas'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('ferramenta.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\FerramentaRequest
     * @return Response
     */
    public function store(FerramentaRequest $request): Response
    {
       $registro = Ferramenta::create($request->all());
       return \redirect()->route('ferramentas.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Ferramenta $ferramenta
    * @return View
    */
    public function show(Ferramenta $ferramenta): View
    {
      return view('ferramenta.show', \compact('ferramenta'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Ferramenta $ferramenta
    * @return View
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */
    public function edit(Ferramenta $ferramenta): View
    {
        return view('ferramenta.edit', \compact('ferramenta'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Ferramenta $ferramenta
    * @param \App\Http\Requests\FerramentaRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "FerramentaRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(FerramentaRequest $request, Ferramenta $ferramenta)
    {
        $ferramenta->update($request->all());
        return \redirect()->route('ferramentas.index', $ferramenta);
    }

    /**
    * Remove the specified resource from storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Ferramenta $ferramenta
    * @return \Illuminate\Http\Response
    * A
    */
    public function destroy(Ferramenta $ferramenta): Response
    {
         $ferramenta->delete();
         return \redirect()->route('ferramentas.index');
    }
}
