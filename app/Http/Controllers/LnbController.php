<?php

namespace App\Http\Controllers;

use App\Models\Lnb;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\LnbRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class LnbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Lnb::paginate(2);
        return view('lnb.indexLnb', \compact('registros'));
    }

    /**
     *  Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('lnb.createlnb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LnbRequest $request
     * @return Response
     */
    public function store(LnbRequest $request): Response
    {
        $registro = Lnb::create($request->all());

        return \redirect()->route('lnbs.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Lnb $lnb
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Lnb $lnb): View
    {
        return view('lnb.showlnb', \compact('lnb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Lnb $lnb
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Lnb" filtrado
     * e dísponivel dentro da view retornada.
     */
    public function edit(Lnb $lnb): View
    {
        return view('lnb.editLnb', \compact('lnb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LnbRequest $request
     * @param Lnb $lnb
     * @return Response
     *
     * Usando a classe "LnbRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(LnbRequest $request, Lnb $lnb): Response
    {
        $lnb->update($request->all());

        return \redirect()->route('lnbs.show', $lnb);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Lnb $lnb
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Lnb $lnb): Response
    {
        $lnb->delete();

        return \redirect()->route('lnbs.index');
    }
}
