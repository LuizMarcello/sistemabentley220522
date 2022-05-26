<?php

namespace App\Http\Controllers;

use App\Models\Cabo;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\CaboRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CaboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {

        $registros = Cabo::paginate(1);
        return view('cabo.indexCabo', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        return view('cabo.createCabo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CaboRequest $request
     * @return Response
     */
    public function store(CaboRequest $request): Response
    {
        $registro = Cabo::create($request->all());

        return \redirect()->route('cabos.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Cabo $cabo
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade"
     */
    public function show(Cabo $cabo): View
    {
        return view('cabo.showCabo', \compact('cabo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cabo $cabo
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Cabo" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Cabo $cabo): View
    {
        return view('cabo.editCabo', \compact('cabo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CaboRequest $request
     * @param Cabo $cabo
     * @return Response
     *
     * Usando a classe "CaboRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(CaboRequest $request, Cabo $cabo): Response
    {
        $cabo->update($request->all());

        return \redirect()->route('cabos.show', $cabo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cabo $cabo
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Cabo $cabo): Response
    {
        $cabo->delete();

        return \redirect()->route('cabos.index');
    }
}
