<?php

namespace App\Http\Controllers;

use App\Models\Roteador;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoteadorRequest;
use Symfony\Component\HttpFoundation\Response;

class RoteadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Roteador" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @param \App\Models\Roteador $registros
     * @param \App\Http\Requests\RoteadorRequest $request
     */
    public function index(RoteadorRequest $request, Roteador $registros): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $registros = Roteador::paginate(5);
        return view('roteador.indexRoteador', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('roteador.createRoteador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\RoteadorRequest
     * @return Response
     */
    public function store(RoteadorRequest $request): Response
    {
        $registro = Roteador::create($request->all());
         return \redirect()->route('roteadores.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * @param int $id
    * @return \Illuminate\View\View
    */
    public function show($id): View
    {
        $roteador = Roteador::findOrFail($id);
        return view('roteador.showRoteador', \compact('roteador'));
    }

    /**
    * Display the specified resource.
    * @param int $id
    * @return \Illuminate\View\View
    *
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */
    public function edit($id): View
    {
        $roteador = Roteador::findOrFail($id);
        return view('roteador.editRoteador', \compact('roteador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param \App\Http\Requests\RoteadorRequest
     * @return \Illuminate\Http\Response
     *
     * Usando a classe "RoteadorRequest" para validar.
     * o método update() serve para receber esses dados e atualizar
     * no banco de dados, como create() e store().
     *
     */
    public function update(RoteadorRequest $request, $id): Response
    {
        $requestData = $request->all();
        $roteador = Roteador::findOrFail($id);
        $roteador->update($requestData);

        return \redirect()->route('roteadores.show', $roteador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Roteador $roteador
     * @return \Illuminate\Http\Response
     * A
     */
    public function destroy(Roteador $roteador): Response
    {
        $roteador->delete();
        return \redirect()->route('roteadores.index');
    }
}
