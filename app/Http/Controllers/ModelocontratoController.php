<?php

namespace App\Http\Controllers;

use App\Models\Modelocontrato;
use Illuminate\Http\Request;

class ModelocontratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $modelocontratos = Modelocontrato::where('empresa_nome', 'LIKE', "%$keyword%")
                ->orWhere('empresa_e-mail', 'LIKE', "%$keyword%")
                ->orWhere('empresa_cpf_cnpj', 'LIKE', "%$keyword%")
                ->orWhere('empresa_rg_inscricao_estadual', 'LIKE', "%$keyword%")
                ->orWhere('empresa_telefone', 'LIKE', "%$keyword%")
                ->orWhere('empresa_endereco_cep', 'LIKE', "%$keyword%")
                ->orWhere('empresa_endereco_rua', 'LIKE', "%$keyword%")
                ->orWhere('empresa_endereco_numero', 'LIKE', "%$keyword%")
                ->orWhere('empresa_endereco_bairro', 'LIKE', "%$keyword%")
                ->orWhere('empresa_endereco_cidade', 'LIKE', "%$keyword%")
                ->orWhere('empresa_endereco_estado', 'LIKE', "%$keyword%")
                ->orWhere('empresa_endereco_complemento', 'LIKE', "%$keyword%")
                ->orWhere('cliente_nome', 'LIKE', "%$keyword%")
                ->orWhere('cliente_e-mail', 'LIKE', "%$keyword%")
                ->orWhere('cliente_cpf_cnpj', 'LIKE', "%$keyword%")
                ->orWhere('cliente_rg_inscricao_estadual', 'LIKE', "%$keyword%")
                ->orWhere('cliente_telefone', 'LIKE', "%$keyword%")
                ->orWhere('cliente_data_nascimento', 'LIKE', "%$keyword%")
                ->orWhere('cliente_endereco_cep', 'LIKE', "%$keyword%")
                ->orWhere('cliente_endereco_rua', 'LIKE', "%$keyword%")
                ->orWhere('cliente_endereco_numero', 'LIKE', "%$keyword%")
                ->orWhere('cliente_endereco_bairro', 'LIKE', "%$keyword%")
                ->orWhere('cliente_endereco_cidade', 'LIKE', "%$keyword%")
                ->orWhere('cliente_endereco_estado', 'LIKE', "%$keyword%")
                ->orWhere('cliente_endereco_complemento', 'LIKE', "%$keyword%")
                ->orWhere('contrato_id', 'LIKE', "%$keyword%")
                ->orWhere('contrato_dia_vencimento', 'LIKE', "%$keyword%")
                ->orWhere('contrato_valor', 'LIKE', "%$keyword%")
                ->orWhere('contrato_desconto', 'LIKE', "%$keyword%")
                ->orWhere('contrato_acrescimo', 'LIKE', "%$keyword%")
                ->orWhere('contrato_forma_pagamento', 'LIKE', "%$keyword%")
                ->orWhere('contrato_data_cadastro', 'LIKE', "%$keyword%")
                ->orWhere('autenticacao_login', 'LIKE', "%$keyword%")
                ->orWhere('autenticacao_senha', 'LIKE', "%$keyword%")
                ->orWhere('autenticacao_ip', 'LIKE', "%$keyword%")
                ->orWhere('autenticacao_mac', 'LIKE', "%$keyword%")
                ->orWhere('autenticacao_servidor_nome', 'LIKE', "%$keyword%")
                ->orWhere('autenticacao_plano_nome', 'LIKE', "%$keyword%")
                ->orWhere('autenticacao_plano_valor', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            /* $modelocontratos = Modelocontrato::latest()->paginate($perPage); */
               $modelocontratos = Modelocontrato::latest()->paginate(3);
        }

        return view('modelocontratos.index', compact('modelocontratos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelocontratos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
