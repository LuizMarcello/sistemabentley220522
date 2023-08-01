@extends('layouts.app')

@section('navbar')
    <!-- Navbar -->
    {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> --}}{{-- Original --}}
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            {{-- Mostrando o breadcrumb (barra de navegação)
             somente se o usuário estiver logado --}}
            @auth
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="nav-item breadcrumb-item d-none d-sm-inline-block"><a href="{{ route('home') }}">Home</a>
                        </li>
                        {{-- Retornando o nome da rota ativa no momento --}}
                        <li class="nav-item breadcrumb-item d-none d-sm-inline-block active" aria-current="page">
                            {{ Route::currentRouteName() }}</li>
                    </ol>
                </nav>
            @endauth
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                {{-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a> --}}
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Cliente id: {{ $cliente->id }}</h4>
                    </div>
                    <div class="card-body">

                        <a href="{{ url('/clientes') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/clientes/' . $cliente->id . '/edit') }}" title="Edit Cliente"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Editar</button></a>

                        <form method="POST" action="{{ url('/clientes' . '/' . $cliente->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Cliente"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> Deletar</button>
                        </form>
                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $cliente->id }}</td>
                                    </tr>

                                    <tr>
                                        <th> Nome/Razão social </th>
                                        <td> {{ $cliente->nome_razaosocial }} </td>
                                    </tr>
                                    <tr>
                                        <th> Ie Rg </th>
                                        {{-- <td> {{ mascara($cliente->ie_rg, '#.###.###-#') }} </td> --}}
                                        <td> {{ $cliente->ie_rg }} </td>
                                    </tr>
                                    <tr>

                                    </tr>
                                    <tr>
                                        <th>CPF</th>
                                        <td> {{ $cliente->cpf }} </td>
                                    </tr>

                                    <tr>
                                        <th>CNPJ</th>
                                        <td> {{ $cliente->cnpj }} </td>
                                    </tr>

                                    <tr>
                                        <th> Inscrição municipal </th>
                                        <td> {{ $cliente->inscricaomunicipal }} </td>
                                    </tr>

                                    <tr>
                                        <th> Nome do contato </th>
                                        <td> {{ $cliente->nome_contato }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefone 1 </th>
                                        {{-- <td> {{ mascara($cliente->telefone1, '(##) ####-####') }} </td> --}}
                                        <td> {{ $cliente->telefone1 }} </td>
                                    </tr>

                                    <tr>
                                        <th> Celular 1 </th>
                                        {{-- <td> {{ mascara($cliente->celular1, '(##) #####-####') }} </td> --}}
                                        <td> {{ $cliente->celular1 }} </td>
                                    </tr>

                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $cliente->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Chave </th>
                                        <td> {{ $cliente->chave }} </td>
                                    </tr>


                                    <tr>
                                        <th> Status </th>
                                        <td> {{ $cliente->status }} </td>
                                    </tr>
                                    <tr>
                                        <th> Forma de pagamento </th>
                                        <td> {{ $cliente->formapagamento }} </td>
                                    </tr>

                                    <tr>
                                        <th> Observação </th>
                                        <td> {{ $cliente->observacao }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div>
                                <h4>Endereço do contratante</h4>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th> Cep </th>
                                        {{-- <td> {{ mascara($cliente->cep1, '#####-###') }} </td> --}}
                                        <td> {{ $cliente->cep1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Rua </th>
                                        <td> {{ $cliente->rua1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Numero </th>
                                        <td> {{ $cliente->numero1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Bairro</th>
                                        <td> {{ $cliente->bairro1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cidade </th>
                                        <td> {{ $cliente->cidade }} </td>
                                    </tr>
                                    <tr>
                                        <th> Estado </th>
                                        <td> {{ $cliente->estado1 }} </td>
                                    </tr>

                                </tbody>
                            </table>
                            <br>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
