<?php

namespace App\Http\Controllers;

use App\Models\Ilnb;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\IlnbRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class IlnbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Ilnb::paginate(2);
        return view('ilnb.indexIlnb', \compact('registros'));
    }

    /**
     *  Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('ilnb.createIlnb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param IlnbRequest $request
     * @return Response
     */
    public function store(IlnbRequest $request): Response
    {
        $registro = Ilnb::create($request->all());

        return \redirect()->route('ilnbs.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Ilnb $ilnb
     * @return View
     *
     *  Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Ilnb $ilnb): View
    {
        return view('ilnb.showilnb', \compact('ilnb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Lnb $modem
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar meu Model "Modem" filtrado
     * e dísponivel dentro da view retornada.
     */

    public function edit(Ilnb $ilnb): View
    {
        return view('ilnb.editIlnb', \compact('ilnb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param IlnbRequest $request
     * @param Ilnb $ilnb
     * @return Response
     *
     * Usando a classe "IilnbRequest" para validar.
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function update(IlnbRequest $request, Ilnb $ilnb): Response
    {
        $ilnb->update($request->all());

        return \redirect()->route('ilnbs.show', $ilnb);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ilnb $ilnb
     * @return Response
     *
     * Também usando "Route Model Binding", como no "edit" acima.
     */
    public function destroy(Ilnb $ilnb): Response
    {
        $ilnb->delete();

        return \redirect()->route('ilnbs.index');
    }
}
