<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\View\View;
use App\Http\Requests\PlanoRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
class PlanoController extends Controller
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
   * @param \App\Models\Plano $plano
   * @param\App\Http\Requests\PlanoRequest $request
   */
    public function index(PlanoRequest $request, Plano $planos): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $planos = Plano::latest()->paginate(5);
        return view('plano.indexPlano', \compact('planos'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('plano.createPlano');
    }

   /**
   * Store a newly created resource in storage.
   *
   * @param \App\Http\Requests\PlanoRequest
   * @return Response
   */
    public function store(PlanoRequest $request): Response
    {
        $registro = Plano::create($request->all());

        return \redirect()->route('planos.show', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Plano $plano
    * @return View
    */
    public function show(Plano $plano): View
    {
        return view('plano.showPlano', \compact('plano'));
    }

   /**
   * Show the form for editing the specified resource.
   *
   * Aplicando o "Route Model Binding" do laravel
   * @param \App\Models\Plano $plano
   * @return View
   *
   * O método edit() serve somente para retornar o formulário
   * preenchido com os dados para serem editados, como create() e store().
   */
    public function edit(Plano $plano): View
    {
        return view('plano.editPlano', \compact('plano'));
    }

   /**
   * Update the specified resource in storage.
   *
   * Aplicando o "Route Model Binding" do laravel
   * @param \App\Models\Plano $plano
   * @param \App\Http\Requests\PlanoRequest
   * @return \Illuminate\Http\Response
   *
   * Usando a classe "PlanoRequest" para validar.
   * o método update() serve para receber esses dados e atualizar
   * no banco de dados, como create() e store().
   *
   */
    public function update(PlanoRequest $request, Plano $plano): Response
    {
        $plano->update($request->all());
        return \redirect()->route('planos.index', $plano);
    }

   /**
   * Remove the specified resource from storage.
   *
   * Aplicando o "Route Model Binding" do laravel
   * @param \App\Models\Plano $plano
   * @return \Illuminate\Http\Response
   *
   */
    public function destroy(Plano $plano): Response
    {
        $plano->delete();

        return \redirect()->route('planos.indexPlano');
    }
}
