<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Representante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RepresentanteRequest;
use Symfony\Component\HttpFoundation\Response;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $registros = Representante::paginate(4);
        return view('representante.indexRepresentante', \compact('registros'));
    }

    /**
     *  Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('representante.createRepresentante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RepresentanteRequest $request
     * @return Response
     */
    public function store(RepresentanteRequest $request): Response
    {
        $registro = Representante::create($request->all());


        return \redirect()->route('representantes.show', $registro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Representante $representante
     * @return View
     *
     * Também usando "Route Model Binding", como no "edit" e "upgrade".
     */
    public function show(Representante $representante): View
    {
        return view('representante.showRepresentante', \compact('representante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Representante $representante
     * @return View
     *
     * Aplicando o "Route Model Binding" do laravel,
     * que está injetando uma instância do Model como
     * parâmetro.
     * Isto já vai tornar o Model "Representante" filtrado
     * e dísponivel dentro da view retornada.
     * O método edit() serve somente para retornar o formulário
     * preenchido com os dados para serem editados, como create() e store().
     */
    public function edit(Representante $representante): View
    {
      return view('representante.editRepresentante', \compact('representante'));
    }

     /**
      * Update the specified resource in storage.
      *
      * @param RepresentanteRequest $request
      * @param Representante $representante
      * @return Response
      *
      * Usando a classe "RepresentanteRequest" para validar.
      * Também usando "Route Model Binding", como no "edit" acima.
      * o método update() serve para receber esses dados e atualizar
      * no banco de dados, como create() e store().
      */
    public function update(RepresentanteRequest $request, Representante $representante): Response
    {

        $representante->update($request->all());

        return \redirect()->route('representantes.show', $representante);
    }

     /**
      * Remove the specified resource from storage.
      *
      * @param Representante $representante
      * @return Response

      * Também usando "Route Model Binding", como no "edit" acima.
      */
    public function destroy(Representante $representante): Response
    {
        $representante->delete();

        return \redirect()->route('representantes.index');
    }
}
