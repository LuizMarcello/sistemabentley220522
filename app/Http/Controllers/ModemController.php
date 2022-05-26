<?php

namespace App\Http\Controllers;

use App\Models\Modem;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\ModemRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ModemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Modem::paginate(3);
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
     * @param ModemRequest $request
     * @return Response
     */
    public function store(ModemRequest $request): Response
    {
        $registro = Modem::create($request->all());

        return \redirect()->route('modens.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Modem $modem
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Modem $modem): View
    {
        return view('modem.showModem', \compact('modem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Modem $modem
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Modem" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Modem $modem): View
    {
        return view('modem.editModem', \compact('modem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ModemRequest $request
     * @param Modem $modem
     * @return Response
     * Usando a classe "ModemRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(ModemRequest $request, Modem $modem): Response
    {
        $modem->update($request->all());

        return \redirect()->route('modens.show', $modem);
    }

    /**
     *  Remove the specified resource from storage.
     *
     * @param Modem $modem
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Modem $modem): Response
    {
        $modem->delete();

        return \redirect()->route('modens.index');
    }
}
