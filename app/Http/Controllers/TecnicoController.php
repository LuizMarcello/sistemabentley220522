<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\TecnicoRequest;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Tecnico::paginate(1);
        return view('tecnico.indexTecnico', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('tecnico.createTecnico');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param TecnicoRequest $request
    * @return Response
    */
    public function store(TecnicoRequest $request): Response
    {
        $registro = Tecnico::create($request->all());

        return \redirect()->route('tecnicos.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Tecnico $tecnico
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Tecnico $tecnico): View
    {
        return view('tecnico.showTecnico', \compact('tecnico'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Tecnico $tecnico
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "empresa" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Tecnico $tecnico): View
    {
        return view('tecnico.editTecnico', \compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     * Usando a classe "TecnicoRequest" para validar.
     *
     * @param TecnicoRequest $request
     * @param Tecnico $tecnico
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     *
     */
    public function update(TecnicoRequest $request, Tecnico $tecnico): Response
    {
        $tecnico->update($request->all());

        return \redirect()->route('tecnicos.show', $tecnico);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tecnico $tecnico
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Tecnico $tecnico): Response
    {
        $tecnico->delete();

        return \redirect()->route('tecnicos.index');
    }
}
