<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\View\View;
use App\Http\Requests\PlanoRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Plano::paginate(4);
        return view('plano.indexPlano', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('plano.createPlano');
    }

   /**
    * Store a newly created resource in storage.
    *
    * @param PlanoRequest $request
    * @return Response
    */
    public function store(PlanoRequest $request): Response
    {
        $registro = Plano::create($request->all());

        return \redirect()->route('planos.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Plano $plano
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Plano $plano): View
    {
        return view('plano.showPlano', \compact('plano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Plano $plano
     * @return View
     *
     * Show the form for editing the specified resource.
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Plano" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Plano $plano): View
    {
        return view('plano.editPlano', \compact('plano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PlanoRequest $request
     * @param Plano $plano
     * @return Response
     *
     * Usando a classe "PlanoRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(PlanoRequest $request, Plano $plano): Response
    {
        $plano->update($request->all());

        return \redirect()->route('planos.show', $plano);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Plano $plano
     * @return Response
     *
     *  Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Plano $plano): Response
    {
        $plano->delete();

        return \redirect()->route('planos.index');
    }
}
