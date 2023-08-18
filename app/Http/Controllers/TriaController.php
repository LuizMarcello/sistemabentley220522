<?php

namespace App\Http\Controllers;

use App\Models\Tria;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\TriaRequest;
use Symfony\Component\HttpFoundation\Response;

class TriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Tria" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @param \App\Models\Tria $registros
     * @param \App\Http\Requests\TriaRequest $request
     */
    public function index(TriaRequest $request, Tria $registros): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $registros = Tria::paginate(5);
        return view('tria.indexTria', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('tria.createTria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\TriaRequest
     * @return Response
     */
    public function store(TriaRequest $request): Response
    {
        $registro = Tria::create($request->all());
         return \redirect()->route('trias.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * @param int $id
    * @return \Illuminate\View\View
    */
    public function show($id): View
    {
        $tria = Tria::findOrFail($id);
        return view('tria.showTria', \compact('tria'));
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
        $tria = Tria::findOrFail($id);
        return view('tria.editTria', \compact('tria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param \App\Http\Requests\TriaRequest
     * @return \Illuminate\Http\Response
     *
     * Usando a classe "TriaRequest" para validar.
     * o método update() serve para receber esses dados e atualizar
     * no banco de dados, como create() e store().
     *
     */
    public function update(TriaRequest $request, $id): Response
    {
        $requestData = $request->all();
        $tria = Tria::findOrFail($id);
        $tria->update($requestData);

        return \redirect()->route('trias.show', $tria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Tria $roteador
     * @return \Illuminate\Http\Response
     * A
     */
    public function destroy(Tria $tria): Response
    {
        $tria->delete();
        return \redirect()->route('trias.index');
    }
}
