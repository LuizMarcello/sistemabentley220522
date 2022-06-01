<?php

namespace App\Http\Controllers;

use App\Models\Antena;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\AntenaRequest;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AntenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Antena::paginate(10);
        return view('antena.indexAntena', \compact('registros'));
    }

    /**
     *  Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        return view('antena.createAntena');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AntenaRequest $request
     * @return Response
     */
    public function store(AntenaRequest $request): Response
    {
        $registro = Antena::create($request->all());

        return \redirect()->route('antenas.show', $registro->id);
    }

    /**
     *  Display the specified resource.
     *
     * @param Antena $antena
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Antena $antena): View
    {
        return view('antena.showAntena', \compact('antena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Antena $antena
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Antena" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Antena $antena): View
    {
        return view('antena.editAntena', \compact('antena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AntenaRequest $request
     * @param Antena $antena
     * @return Response
     *
     * Usando a classe "AntenaRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(AntenaRequest $request, Antena $antena): Response
    {
        $antena->update($request->all());

        return \redirect()->route('antenas.show', $antena);
    }

    /**
     *  Remove the specified resource from storage.
     *
     * @param Antena $antena
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Antena $antena): Response
    {
        $antena->delete();

        return \redirect()->route('antenas.index');
    }
}
