<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Representante;
use App\Http\Controllers\Controller;
use App\Http\Requests\RepresentanteRequest;
use Symfony\Component\HttpFoundation\Response;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "antena" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @return View
     */
    public function index(Representante $representante): View
    {
        $registros = Representante::paginate(5);
        return view('representante.indexRepresentante', \compact('registros'));
    }

    /**
     *  Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('representante.createRepresentante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\RepresentanteRequest $request
     * @return Response
     */
    public function store(RepresentanteRequest $request): Response
    {
        $registro = Representante::create($request->all());
        return \redirect()->route('representantes.index', $registro->id);
    }

    /**
     * Display the specified resource.
     * Aplicando o "Route Model Binding" do laravel
     * @param \App\Models\Representante $representante
     * @return View
     *
     */
    public function show(Representante $representante): View
    {
        return view('representante.showRepresentante', \compact('representante'));
    }

    /**
     * Show the form for editing the specified resource.
     * Aplicando o "Route Model Binding" do laravel
     * @param \App\Models\Representante $representante
     * @return View
     *
     *
     * O método edit() serve somente para retornar o formulário
     * preenchido com os dados para serem editados, como create() e store().
     */
    public function edit(Representante $representante): View
    {
      return view('representante.editRepresentante', \compact('representante'));
    }

     /**
      * Update the specified resource in storage.

      * Aplicando o "Route Model Binding" do laravel
      * @param \App\Models\Representante $representante
      * @param \App\Http\Request\RepresentanteRequest
      * @return \Illuminate\Http\Response
      *
      * Usando a classe "RepresentanteRequest" para validar.
      * o método update() serve para receber esses dados e atualizar
      * no banco de dados, como create() e store().
      */
    public function update(RepresentanteRequest $request, Representante $representante): Response
    {
        $representante->update($request->all());
        return \redirect()->route('representantes.index', $representante);
    }

     /**
      * Remove the specified resource from storage.
      *
      * Aplicando o "Route Model Binding" do laravel
      * @param \App\Models\Representante $representante
      * @return Response
      *
      *
      */
    public function destroy(Representante $representante): Response
    {
        $representante->delete();

        return \redirect()->route('representantes.index');
    }
}
