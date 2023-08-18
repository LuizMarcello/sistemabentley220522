<?php

namespace App\Http\Controllers;

use App\Models\Modem;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModemRequest;
use Symfony\Component\HttpFoundation\Response;

class ModemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Modem" filtrado
     * e dísponivel dentro da view retornada.
     *
     * @param \App\Models\Modem $registros
     * @param \App\Http\Requests\ModemRequest $request
     */
    public function index(ModemRequest $request, Modem $registros): View
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $registros = Modem::paginate(5);
        return view('modem.indexModem', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('modem.createModem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ModemRequest
     * @return Response
     */
    public function store(ModemRequest $request): Response
    {
        $registro = Modem::create($request->all());
         return \redirect()->route('modens.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * @param int $id
    * @return \Illuminate\View\View
    */
    public function show($id): View
    {
        $modem = Modem::findOrFail($id);
        return view('modem.showModem', \compact('modem'));
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
        $modem = Modem::findOrFail($id);
        return view('modem.editModem', \compact('modem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param \App\Http\Requests\ModemRequest
     * @return \Illuminate\Http\Response
     *
     * Usando a classe "ModemRequest" para validar.
     * o método update() serve para receber esses dados e atualizar
     * no banco de dados, como create() e store().
     *
     */
    public function update(ModemRequest $request, $id): Response
    {
        $requestData = $request->all();
        $modem = Modem::findOrFail($id);
        $modem->update($requestData);

        return \redirect()->route('modens.show', $modem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * Aplicando o "Route Model Binding" do laravel
     * @param  \App\Models\Modem $roteador
     * @return \Illuminate\Http\Response
     * A
     */
    public function destroy(Modem $modem): Response
    {
        $modem->delete();
        return \redirect()->route('modens.index');
    }
}
