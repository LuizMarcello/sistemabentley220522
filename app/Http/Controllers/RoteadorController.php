<?php

namespace App\Http\Controllers;

use App\Models\Roteador;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoteadorRequest;
use Symfony\Component\HttpFoundation\Response;
class RoteadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Roteador::paginate(2);

        return view('roteador.indexRoteador', \compact('registros'));
    }

    /**
     *  Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        return view('roteador.createRoteador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RoteadorRequest $request
     * @return Response
     */
    public function store(RoteadorRequest $request): Response
    {
        $registro = Roteador::create($request->all());

        return \redirect()->route('roteadors.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Roteador $roteador
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Roteador $roteador): View
    {
        return view('roteador.showroteador', \compact('roteador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Roteador $roteador
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Roteador" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Roteador $roteador): View
    {
        return view('roteador.editRoteador', \compact('roteador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoteadorRequest $request
     * @param Roteador $roteador
     * @return Response
     *
     * Usando a classe "RoteadorRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(RoteadorRequest $request, Roteador $roteador): Response
    {
        $roteador->update($request->all());

        return \redirect()->route('roteadors.show', $roteador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Roteador $roteador
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Roteador $roteador): Response
    {
        $roteador->delete();

        return \redirect()->route('roteadors.index');
    }
}
