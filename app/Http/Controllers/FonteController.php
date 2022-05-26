<?php

namespace App\Http\Controllers;

use App\Models\Fonte;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\FonteRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class FonteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Fonte::paginate(1);
        return view('fonte.indexFonte', \compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        return view('fonte.createFonte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FonteRequest $request
     * @return Response
     */
    public function store(FonteRequest $request): Response
    {
        $registro = Fonte::create($request->all());

        return \redirect()->route('fontes.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Fonte $fonte
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Fonte $fonte): View
    {
        return view('fonte.showFonte', \compact('fonte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Fonte $fonte
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Fonte" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Fonte $fonte): View
    {
        return view('fonte.editFonte', \compact('fonte'));
    }

    /**
     * Update the specified resource in storage
     *
     * @param FonteRequest $request
     * @param Fonte $fonte
     * @return Response
     *
     * Usando a classe "FonteRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(FonteRequest $request, Fonte $fonte): Response
    {
        $fonte->update($request->all());

        return \redirect()->route('fontes.show', $fonte);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Fonte $fonte
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Fonte $fonte): Response
    {
        $fonte->delete();

        return \redirect()->route('fontes.index');
    }
}
