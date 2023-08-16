<?php

namespace App\Http\Controllers;

use App\Models\Fonte;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\FonteRequest;
use Symfony\Component\HttpFoundation\Response;

class FonteController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return View
    *
    * Aplicando o "Route Model Binding" do laravel,
    * que está injetando uma instância do Model como
    * parâmetro.
    * Isto já vai tornar meu Model "Fonte" filtrado
    * e dísponivel dentro da view retornada.
    *
    * @param \App\Models\Fonte $registros
    * @param \App\Http\Requests\FonteRequest $request
    */
    public function index(FonteRequest $request, Fonte $registros): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $registros = Fonte::paginate(1);
        return view('fonte.indexFonte', \compact('registros'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('fonte.createFonte');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \App\Http\Requests\FonteRequest
    * @return Response
    */
    public function store(FonteRequest $request): Response
    {
        $registro = Fonte::create($request->all());

        return \redirect()->route('fontes.show', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Fonte $fonte
    * @return View
    */
    public function show(Fonte $fonte): View
    {
        return view('fonte.showFonte', \compact('fonte'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Fonte $fonte
    * @return View
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */
    public function edit(Fonte $fonte): View
    {
        return view('fonte.editFonte', \compact('fonte'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Fonte $fonte
    * @param \App\Http\Requests\FonteRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "FonteRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(FonteRequest $request, Fonte $fonte): Response
    {
        $fonte->update($request->all());
        return \redirect()->route('fontes.show', $fonte);
    }

    /**
    * Remove the specified resource from storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Fonte $fonte
    * @return \Illuminate\Http\Response
    * A
    */
    public function destroy(Fonte $fonte): Response
    {
        $fonte->delete();

        return \redirect()->route('fontes.index');
    }
}
