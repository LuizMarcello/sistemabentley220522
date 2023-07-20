<?php

namespace App\Http\Controllers;

use App\Models\Tria;
use Illuminate\View\View;
use App\Http\Requests\TriaRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
class TriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Tria::paginate(2);
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
     *  Store a newly created resource in storage.
     *
     * @param TriaRequest $request
     * @return Response
     */
    public function store(TriaRequest $request): Response
    {
        $registro = Tria::create($request->all());

        return \redirect()->route('trias.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Tria $tria
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Tria $tria): View
    {
        return view('tria.showTria', \compact('tria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tria $tria
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Distribuidor" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Tria $tria): View
    {
        return view('tria.editTria', \compact('tria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TriaRequest $request
     * @param Tria $tria
     * @return Response
     *
     * Usando a classe "TriaRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(TriaRequest $request, Tria $tria): Response
    {
        $tria->update($request->all());

        return \redirect()->route('trias.show', $tria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tria $tria
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Tria $tria): Response
    {
        $tria->delete();

        return \redirect()->route('trias.index');
    }
}
