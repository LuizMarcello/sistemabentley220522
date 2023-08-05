<?php

namespace App\Http\Controllers;

use App\Models\Modelocontrato;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModelocontratoRequest;
use Symfony\Component\HttpFoundation\Response;

class ModelocontratoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return View
    *
    * Aplicando o "Route Model Binding" do laravel,
    * que está injetando uma instância do Model como
    * parâmetro.
    * Isto já vai tornar meu Model "Modelocontrato" filtrado
    * e dísponivel dentro da view retornada.
    *
    * @param \App\Models\Modelocontrato $modelocontratos
    * @param\App\Http\Requests\ModelocontratoRequest $request
    */
    public function index(ModelocontratoRequest $request, Modelocontrato $modelocontratos)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $modelocontratos = Modelocontrato::latest()->paginate(5);
        return view('modelocontrato.index', compact('modelocontratos'));
    }


    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('modelocontrato.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \App\Http\Requests\ModelocontratoRequest
    * @return Response
    */
    public function store(ModelocontratoRequest $request): Response
    {
         $registro = Modelocontrato::create($request->all());
         return \redirect()->route('modelocontratos.index', $registro->id);
    }

     /**
     * Display the specified resource.
     * Aplicando o "Route Model Binding" do laravel
     * @param \App\Models\Modelocontrato $modelocontrato
     * @return View
     */
    public function show(Modelocontrato $modelocontrato): View
    {
        return view('modelocontrato.show', \compact('modelocontrato'));
    }

   /**
   * Show the form for editing the specified resource.
   *
   * Aplicando o "Route Model Binding" do laravel
   * @param \App\Models\Modelocontrato $modelocontrato
   * @return View
   *
   * O método edit() serve somente para retornar o formulário
   * preenchido com os dados para serem editados, como create() e store().
   */
    public function edit(Modelocontrato $modelocontrato): View
    {
        return view('modelocontrato.edit', \compact('modelocontrato'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Modelocontrato $modelocontrato
    * @param \App\Http\Requests\ModelocontratoRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "ChamadoRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(ModelocontratoRequest $request, Modelocontrato $modelocontrato): Response
    {
        $modelocontrato->update($request->all());
        return \redirect()->route('modelocontratos.index', $modelocontrato);
        /* return \redirect()->route('modelocontrato.index', 'modelocontratos'); */
    }

    /**
    * Remove the specified resource from storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Modelocontrato $Modelocontrato
    * @return \Illuminate\Http\Response
    *
    */
    public function destroy(Modelocontrato $modelocontrato)
    {
        $modelocontrato->delete();
        return \redirect()->route('modelocontratos.index');
    }
}
