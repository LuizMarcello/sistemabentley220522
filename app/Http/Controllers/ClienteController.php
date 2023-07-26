<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller {
    /* Sobre middlewares: */
    /* Aplicando um middleware pelo controller: */
    /* public function __construct() */
    /* {
    */
    /* Método 'only()' aplicando somente na ação 'index' */
    /* Método 'except()' aplicando a todos e não aplicando somente na ação 'create' */
    /* $this->middleware( 'alerttasks' )->only( 'index' );
    */
    /*  $this->middleware( 'alerttasks' )->except( 'create' );
    */
    /*   }
    */

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\View\View
    */

    public function index( Request $request ) {
        /* var_dump( session( 'todotasks' ) );
        */

        $keyword = $request->get( 'search' );
        $perPage = 25;

        if ( !empty( $keyword ) ) {
            $clientes = Cliente::where( 'user_id', 'LIKE', "%$keyword%" )
            ->orWhere( 'nome_razaosocial', 'LIKE', "%$keyword%" )
            ->orWhere( 'ie_rg', 'LIKE', "%$keyword%" )
            //->orWhere( 'documento', 'LIKE', "%$keyword%" )
            ->orWhere( 'inscricaomunicipal', 'LIKE', "%$keyword%" )
            //->orWhere( 'datanascimento', 'LIKE', "%$keyword%" )
            ->orWhere( 'nome_contato', 'LIKE', "%$keyword%" )
            ->orWhere( 'celular1', 'LIKE', "%$keyword%" )
            ->orWhere( 'cpf', 'LIKE', "%$keyword%" )
            ->orWhere( 'cnpj', 'LIKE', "%$keyword%" )
            //->orWhere( 'celular2', 'LIKE', "%$keyword%" )
            ->orWhere( 'telefone1', 'LIKE', "%$keyword%" )
            //->orWhere( 'telefone2', 'LIKE', "%$keyword%" )
            ->orWhere( 'email', 'LIKE', "%$keyword%" )
            ->orWhere( 'chave', 'LIKE', "%$keyword%" )
            //->orWhere( 'equipamento', 'LIKE', "%$keyword%" )
            //->orWhere( 'dataadesao', 'LIKE', "%$keyword%" )
            //->orWhere( 'datacadastro', 'LIKE', "%$keyword%" )
            ->orWhere( 'observacao', 'LIKE', "%$keyword%" )
            ->orWhere( 'cep1', 'LIKE', "%$keyword%" )
            ->orWhere( 'rua1', 'LIKE', "%$keyword%" )
            ->orWhere( 'numero1', 'LIKE', "%$keyword%" )
            ->orWhere( 'bairro1', 'LIKE', "%$keyword%" )
            ->orWhere( 'cidade', 'LIKE', "%$keyword%" )
            ->orWhere( 'estado1', 'LIKE', "%$keyword%" )
            //->orWhere( 'celular11', 'LIKE', "%$keyword%" )
            //->orWhere( 'telefone11', 'LIKE', "%$keyword%" )
            //->orWhere( 'cep2', 'LIKE', "%$keyword%" )
            //->orWhere( 'rua2', 'LIKE', "%$keyword%" )
            //->orWhere( 'numero2', 'LIKE', "%$keyword%" )
            //->orWhere( 'bairro2', 'LIKE', "%$keyword%" )
            //->orWhere( 'cidade2', 'LIKE', "%$keyword%" )
            //->orWhere( 'estado2', 'LIKE', "%$keyword%" )
            //->orWhere( 'celular21', 'LIKE', "%$keyword%" )
            //->orWhere( 'telefone21', 'LIKE', "%$keyword%" )
            //->orWhere( 'cep3', 'LIKE', "%$keyword%" )
            //->orWhere( 'rua3', 'LIKE', "%$keyword%" )
            //->orWhere( 'numero3', 'LIKE', "%$keyword%" )
            //->orWhere( 'bairro3', 'LIKE', "%$keyword%" )
            //->orWhere( 'cidade3', 'LIKE', "%$keyword%" )
            //->orWhere( 'estado3', 'LIKE', "%$keyword%" )
            //->orWhere( 'celular31', 'LIKE', "%$keyword%" )
            //->orWhere( 'telefone31', 'LIKE', "%$keyword%" )
            ->orWhere( 'status', 'LIKE', "%$keyword%" )
            //->orWhere( 'banda', 'LIKE', "%$keyword%" )
            ->orWhere( 'formapagamento', 'LIKE', "%$keyword%" )
            //->orWhere( 'instalador', 'LIKE', "%$keyword%" )
            //->orWhere( 'distribuidor', 'LIKE', "%$keyword%" )
            //->orWhere( 'plano', 'LIKE', "%$keyword%" )
            //->orWhere( 'representante', 'LIKE', "%$keyword%" )
            ->latest()->paginate( $perPage );
        } else {
            /* $clientes = Cliente::latest()->paginate( $perPage );
            */
            $clientes = Cliente::latest()->paginate( 3 );
        }

        return view( 'cliente.index', compact( 'clientes' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\View\View
    */

    public function create( Request $request ) {
        return view( 'cliente.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */

    public function store( ClienteRequest $request ): Response {
        /* $cliente = new Cliente;
        */

        $requestData = $request->all();

        if ( Cliente::create( $requestData ) ) {
            $request->session()->flash( 'success', 'Cliente cadastrado com sucesso!!' );
        } else {
            $request->session()->flash( 'error', 'Êrro ao cadastrar cliente!!' );
        }

        return redirect( 'clientes' )->with( 'flash_message', 'Cliente added!' );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    *
    * @return \Illuminate\View\View
    */

    public function show( $id ) {
        $cliente = Cliente::findOrFail( $id );
        return view( 'cliente.show', compact( 'cliente' ) );
    }

    /**
    * Show the form for editing the specified resource.
    * Somente mostra o formulário de edição para o específico recurso
    * @param  int  $id
    *
    * @return \Illuminate\View\View
    */

    public function edit( $id ) {
        $cliente = Cliente::findOrFail( $id );

        /* Para permissão/autorização do 'edit()' deste controller. */
        /* Parâmetros: Nome do gate e instância do cliente */
        //$this->authorize( 'update-client', $cliente );

        return view( 'cliente.edit', compact( 'cliente' ) );
    }

    /**
    * Update the specified resource in storage.
    * Atualiza o específico recurso no banco de dados
    * @param \Illuminate\Http\Request $request
    * @param  int  $id
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */

    public function update( ClienteRequest $request, $id ) {
        $requestData = $request->all();
        $cliente = Cliente::findOrFail( $id );

        /* Para permissão/autorização do 'update()' deste controller. */
        /* Parâmetros: Nome do gate e instância do cliente */
        //$this->authorize( 'update-client', $cliente );

        $cliente->update( $requestData );

        if ( $cliente->update( $requestData ) ) {
            $request->session()->flash( 'success', 'Cliente atualizado com sucesso!!' );
        } else {
            $request->session()->flash( 'error', 'Êrro ao atualizar cliente!!' );
        }

        return redirect( 'clientes' )->with( 'flash_message', 'Cliente updated!' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    *
    * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    */

    public function destroy( $id, Request $request ) {
        /*  Cliente::destroy( $id );
        */

        $cliente = Cliente::findOrfail( $id );
        /* Para permissão/autorização do 'destroy()' deste controller. */
        /* Parâmetros: Nome do gate e instância do cliente. */
        //$this->authorize( 'update-client', $cliente );

        if ( Cliente::destroy( $id ) ) {
            $request->session()->flash( 'success', 'Cliente deletado com sucesso!!' );
        } else {
            $request->session()->flash( 'error', 'Êrro ao deletar cliente!!' );
        }

        return redirect( 'clientes' )->with( 'flash_message', 'Cliente deleted!' );
    }
}
