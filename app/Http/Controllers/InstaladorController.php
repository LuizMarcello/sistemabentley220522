<?php

namespace App\Http\Controllers;

use App\Models\Instalador;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstaladorRequest;
use Symfony\Component\HttpFoundation\Response;
class InstaladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Instalador::paginate(7);
        return view('instalador.indexInstalador', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('instalador.createInstalador');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param InstaladorRequest $request
    * @return Response
    */
    public function store(InstaladorRequest $request): Response
    {
        $registro = Instalador::create($request->all());

        return \redirect()->route('instaladores.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Instalador $instalador
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    //public function show( $Instaladorinstalador): View
    //{
        //return view('instalador.showInstalador', \compact('instalador'));
    //}

    //public function show($id)
    public function show(Instalador $instalador): View
    {
       // $instalador = Instalador::findOrFail();
        return view('instalador.showInstalador', \compact('instalador'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Instalador $instalador
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "empresa" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Instalador $instalador, $id): View
    {
        $instalador = Instalador::findOrFail($id);
        return view('instalador.editInstalador', \compact('instalador'));
    }

    /**
     * Update the specified resource in storage.
     * Usando a classe "InstaladorRequest" para validar.
     *
     * @param InstaladorRequest $request
     * @param Instalador $instalador
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     *
     */
    public function update(InstaladorRequest $request, Instalador $instalador): Response
    {
        $instalador->update($request->all());

        return \redirect()->route('instaladores.show', $instalador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Instalador $instalador
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Instalador $instalador, $id): Response
    {
        $instalador->delete($id);
        return \redirect()->route('instaladores.index');
    }
}
