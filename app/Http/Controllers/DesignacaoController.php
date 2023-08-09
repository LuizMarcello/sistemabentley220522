<?php

namespace App\Http\Controllers;

use App\Models\Designacao;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\DesignacaoRequest;
use Symfony\Component\HttpFoundation\Response;

class DesignacaoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return View
    *
    * Aplicando o "Route Model Binding" do laravel,
    * que está injetando uma instância do Model como
    * parâmetro.
    * Isto já vai tornar meu Model "Designacao" filtrado
    * e dísponivel dentro da view retornada.
    *
    * @param \App\Models\Designacao $Designacao
    * @param\App\Http\Requests\DesignacaoRequest $request
    */
    public function index(DesignacaoRequest $request, Designacao $designacoes): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $designacoes = Designacao::latest()->paginate(5);
        return view('designacao.index', compact('designacoes'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */
    public function create(): View
    {
        return view('designacao.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\DesignacaoRequest
     * @return Response
     */
    public function store(Designacao $request): Response
    {
        $registro = Designacao::create($request->all());
        return \redirect()->route('designacoes.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Designacao $designaco
    * @return View
    */
    public function show(Designacao $designaco): View
    {
        return view('designacao.show', \compact('designaco'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Designacao $designaco
    * @return View
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */
    public function edit(Designacao $designaco): View
    {
        return view('designacao.edit', \compact('designaco'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Designacao $designacao
    * @param \App\Http\Requests\DesignacaoRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "DesignacaoRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */
    public function update(DesignacaoRequest $request, Designacao $designaco): Response
    {
        $designaco->update($request->all());
        return \redirect()->route('designacoes.index', $designaco);
        /* return \redirect()->route('designacoes.index', 'designaco'); */
    }

    /**
    * Remove the specified resource from storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Designacao $designacao
    * @return \Illuminate\Http\Response
    *
    */
    public function destroy(Designacao $designacao): Response
    {
       $designacao->delete();
       return \redirect()->route('designacoes.index');
    }
}
