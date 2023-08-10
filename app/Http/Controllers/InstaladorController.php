<?php

namespace App\Http\Controllers;

use App\Models\Instalador;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChamadoRequest;
use App\Http\Requests\InstaladorRequest;
use Symfony\Component\HttpFoundation\Response;
class InstaladorController extends Controller
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
    * @param \App\Models\Instalador $registros
    * @param\App\Http\Requests\InstaladorRequest $request
    */
    public function index(InstaladorRequest $request, Instalador $registros): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $registros = Instalador::latest()->paginate(5);
        return view('instalador.indexInstalador', \compact('registros'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('instalador.createInstalador');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \App\Http\Requests\InstaladorRequest
    * @return Response
    */
    public function store(InstaladorRequest $request): Response
    {
        $registro = Instalador::create($request->all());

        return \redirect()->route('instaladores.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Instalador $instalador
    * @return View
    */
    public function show(Instalador $instaladore): View
    {
        return view('instalador.showInstalador', \compact('instaladore'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Instalador $instalador
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "empresa" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Instalador $instaladore): View
    {
        return view('instalador.editInstalador', \compact('instaladore'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Instalador $instalador
    * @param \App\Http\Requests\InstaladorRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "InstaladorRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(InstaladorRequest $request, Instalador $instaladore): Response
    {
        $instaladore->update($request->all());
        return \redirect()->route('instaladores.show', $instaladore);
    }

     /**
     * Remove the specified resource from storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param \App\Models\Instalador $instalador
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy(Instalador $instalador): Response
    {
        $instalador->delete();
        return \redirect()->route('instaladores.index');
    }
}
