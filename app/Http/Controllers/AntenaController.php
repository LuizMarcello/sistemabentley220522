<?php

namespace App\Http\Controllers;

use App\Models\Antena;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\AntenaRequest;
use Symfony\Component\HttpFoundation\Response;

class AntenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Antena" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @param \App\Models\Antena $antena
     * @param \App\Http\Requests\AntenaRequest $request
     */
    public function index(AntenaRequest $request, Antena $antena): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $antena = Antena::paginate(5);
        return view('antena.indexAntena', \compact('antena'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('antena.CreateAntena');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\AntenaRequest
     * @return Response
     */
    public function store(AntenaRequest $request): Response
    {
        $registro = Antena::create($request->all());
         return \redirect()->route('antenas.index', $registro->id);
    }

    /**
     * Display the specified resource.
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Antena $antena
     * @return View
     */
    public function show(Antena $antena): View
    {
        return view('antena.showAntena', \compact('antena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Antena $antena
     * @return View
     *
     * O método edit() serve somente para retornar o formulário
     * preenchido com os dados para serem editados, como create() e store().
     */
    public function edit(Antena $antena): View
    {
        return view('antena.editAntena', \compact('antena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Antena  $antena
     * @param \App\Http\Requests\AntenaRequest
     * @return \Illuminate\Http\Response
     *
     * Usando a classe "AntenaRequest" para validar.
     * o método update() serve para receber esses dados e atualizar
     * no banco de dados, como create() e store().
     *
     */
    public function update(AntenaRequest $request, Antena $antena): Response
    {
        $antena->update($request->all());
        return \redirect()->route('antenas.index', $antena);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Antena  $antena
     * @return \Illuminate\Http\Response
     * A
     */
    public function destroy(Antena $antena): Response
    {
        $antena->delete();
        return \redirect()->route('antenas.index');
    }
}
