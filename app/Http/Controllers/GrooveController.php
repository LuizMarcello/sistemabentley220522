<?php

namespace App\Http\Controllers;

use App\Models\Groove;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\GrooveRequest;
use Symfony\Component\HttpFoundation\Response;

class GrooveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Groove" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @param \App\Models\Groove $groove
     * @param \App\Http\Requests\GrooveRequest $request
     */
    public function index(GrooveRequest $request, Groove $grooves): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $grooves = Groove::paginate(5);
        return view('groove.indexGroove', \compact('grooves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('groove.createGroove');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\GrooveRequest
     * @return Response
     */
    public function store(GrooveRequest $request): Response
    {
        $registro = Groove::create($request->all());
         return \redirect()->route('grooves.index', $registro->id);
    }

    /**
     * Display the specified resource.
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Groove $groove
     * @return View
     */
    public function show(Groove $groove): View
    {
        return view('groove.showGroove', \compact('groove'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Groove $groove
     * @return View
     *
     * O método edit() serve somente para retornar o formulário
     * preenchido com os dados para serem editados, como create() e store().
     */
    public function edit(Groove $groove): View
    {
        return view('groove.editGroove', \compact('groove'));
    }

    /**
     * Update the specified resource in storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Groove  $groove
     * @param \App\Http\Requests\GrooveRequest
     * @return \Illuminate\Http\Response
     *
     * Usando a classe "GrooveRequest" para validar.
     * o método update() serve para receber esses dados e atualizar
     * no banco de dados, como create() e store().
     *
     */
    public function update(GrooveRequest $request, Groove $groove): Response
    {
        $groove->update($request->all());
        return \redirect()->route('grooves.show', $groove);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Groove $groove
     * @return \Illuminate\Http\Response
     * A
     */
    public function destroy(Groove $groove): Response
    {
        $groove->delete();
        return \redirect()->route('grooves.index');
    }
}
