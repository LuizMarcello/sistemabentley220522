<?php

namespace App\Http\Controllers;

use App\Models\Ilnb;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\IlnbRequest;
use Symfony\Component\HttpFoundation\Response;

class IlnbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Ilnb" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @param \App\Models\Ilnb $ilnb
     * @param \App\Http\Requests\IlnbRequest $request
     */
    public function index(IlnbRequest $request, Ilnb $registros): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $registros = Ilnb::paginate(5);
        return view('ilnb.indexIlnb', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('ilnb.createIlnb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\IlnbRequest
     * @return Response
     */
    public function store(IlnbRequest $request): Response
    {
        $registro = Ilnb::create($request->all());
         return \redirect()->route('ilnbs.index', $registro->id);
    }

    /**
     * Display the specified resource.
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Antena $antena
     * @return View
     */
    public function show(Ilnb $ilnb): View
    {
        return view('ilnb.showIlnb', \compact('ilnb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Ilnb $ilnb
     * @return View
     *
     * O método edit() serve somente para retornar o formulário
     * preenchido com os dados para serem editados, como create() e store().
     */
    public function edit(Ilnb $ilnb): View
    {
        return view('ilnb.editIlnb', \compact('ilnb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Ilnb  $ilnb
     * @param \App\Http\Requests\IlnbRequest
     * @return \Illuminate\Http\Response
     *
     * Usando a classe "IlnbRequest" para validar.
     * o método update() serve para receber esses dados e atualizar
     * no banco de dados, como create() e store().
     *
     */
    public function update(IlnbRequest $request, Ilnb $ilnb): Response
    {
        $ilnb->update($request->all());
        return \redirect()->route('ilnbs.show', $ilnb);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Ilnb  $ilnb
     * @return \Illuminate\Http\Response
     * A
     */
    public function destroy(Ilnb $ilnb): Response
    {
        $ilnb->delete();
        return \redirect()->route('ilnbs.index');
    }
}
