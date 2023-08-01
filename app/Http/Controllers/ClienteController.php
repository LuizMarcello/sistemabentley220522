<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller {

    /**
    * Display a listing of the resource.
    *
    * @return View
    *
    * Aplicando o "Route Model Binding" do laravel,
    * que está injetando uma instância do Model como
    * parâmetro.
    * Isto já vai tornar meu Model "antena" filtrado
    * e dísponivel dentro da view retornada.
    *
    */

    public function index(Cliente $request)
    {
         $keyword = $request->get( 'search' );
         $perPage = 25;

         if ( !empty( $keyword ) ) {
         $clientes = Cliente::where( 'user_id', 'LIKE', "%$keyword%" )
         ->orWhere( 'nome_razaosocial', 'LIKE', "%$keyword%" )
         ->orWhere( 'ie_rg', 'LIKE', "%$keyword%" )
         ->orWhere( 'inscricaomunicipal', 'LIKE', "%$keyword%" )
         ->orWhere( 'nome_contato', 'LIKE', "%$keyword%" )
         ->orWhere( 'celular1', 'LIKE', "%$keyword%" )
         ->orWhere( 'cpf', 'LIKE', "%$keyword%" )
         ->orWhere( 'cnpj', 'LIKE', "%$keyword%" )
         ->orWhere( 'telefone1', 'LIKE', "%$keyword%" )
         ->orWhere( 'email', 'LIKE', "%$keyword%" )
         ->orWhere( 'chave', 'LIKE', "%$keyword%" )
         ->orWhere( 'observacao', 'LIKE', "%$keyword%" )
         ->orWhere( 'cep1', 'LIKE', "%$keyword%" )
         ->orWhere( 'rua1', 'LIKE', "%$keyword%" )
         ->orWhere( 'numero1', 'LIKE', "%$keyword%" )
         ->orWhere( 'bairro1', 'LIKE', "%$keyword%" )
         ->orWhere( 'cidade', 'LIKE', "%$keyword%" )
         ->orWhere( 'estado1', 'LIKE', "%$keyword%" )
         ->orWhere( 'status', 'LIKE', "%$keyword%" )
         ->orWhere( 'formapagamento', 'LIKE', "%$keyword%" )
         ->latest()->paginate( $perPage );
         } else {
         //$clientes = Cliente::latest()->paginate( $perPage );
         $clientes = Cliente::latest()->paginate( 3 );
         }
         return view( 'cliente.index', compact( 'clientes' ) );

    }

    /**
    * Show the form for creating a new resource.
    *
    * @return View
    */

    public function create() :View
    {
        return view('cliente.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \App\Http\Requests\ClienteRequest
    * @return Response
    */

    public function store(ClienteRequest $request): Response
    {
         $registro = Cliente::create($request->all());
         return \redirect()->route('clientes.index', $registro->id);
    }

    /**
    * Display the specified resource.
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Cliente $antena
    * @return View
    */

    public function show(Cliente $cliente): View
    {
        return view('cliente.show', \compact('cliente'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Cliente $antena
    * @return View
    *
    * O método edit() serve somente para retornar o formulário
    * preenchido com os dados para serem editados, como create() e store().
    */

    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', \compact('cliente'));
    }

    /**
    * Update the specified resource in storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Cliente $antena
    * @param \App\Http\Request\ClienteRequest
    * @return \Illuminate\Http\Response
    *
    * Usando a classe "ClienteRequest" para validar.
    * o método update() serve para receber esses dados e atualizar
    * no banco de dados, como create() e store().
    *
    */

    public function update(ClienteRequest $request, Cliente $cliente)
    {
       $cliente->update($request->all());
       return \redirect()->route('clientes.index', $cliente);
    }

    /**
    * Remove the specified resource from storage.
    *
    * Aplicando o "Route Model Binding" do laravel
    * @param \App\Models\Antena $antena
    * @return \Illuminate\Http\Response
    * A
    */

    public function destroy(Cliente $cliente) {
        $cliente->delete();
        return \redirect()->route('clientes.index');
    }
}
