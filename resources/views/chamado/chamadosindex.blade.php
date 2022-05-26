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
            <div class="col-md-9">
                {{-- <a href="{{ route('empresa.relatorios.chamado') }}" class="btn btn-primary btn-sm">Relatório de chamado</a> --}}
                <div class="card">
                    <div class="card-header">
                        <h4> Chamados</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <span class="block p-2 bg-white text-black">TODOS - 00</span>
                            <span class="block p-2 bg-info text-white">NOVOS - 00</span>
                            <span class="block p-2 bg-success text-white">AGUARDANDO CLIENTE - 00</span>
                            <span class="block p-2 bg-danger text-white">AGUARDANDO EMPRESA - 00</span>
                            <span class="block p-2 bg-dark text-white">FINALIZADO - 00</span>
                        </div>
                        <br>

                        <form method="GET" action="{{ url('/chamados') }}" accept-charset="UTF-8"
                            class="form- my-2 my-lg-2 {{-- float-right --}}" role="search">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" style=""
                                        placeholder="Pesquisar por id, assunto, cliente, nome, e-mail e CPF/CNPJ"
                                        value="{{ request('search') }}">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="col">
                            <a href="{{ url('/chamados/create') }}" class="btn btn-success btn-md" title="Novo chamado"
                                data-toggle="modal" data-target="#modelchamado">
                                <i class="fa fa-plus" aria-hidden="true"></i> Novo chamado
                            </a>
                        </div>

                        {{-- ===MODAL=== --}}
                        <div class="modal fade" id="modelchamado" tabindex="-1" aria-labelledby="modelchamadoLabel">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelchamadoLabel">Cadastrar chamado</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                src="{{ route('chamados.create') }}"></iframe>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancelar</button>
                                        {{-- <button type="button" class="btn btn-primary">Cadastrar</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ===MODAL=== --}}

                        <br>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Assunto</th>
                                        <th>Cliente</th>
                                        <th>Categoria</th>
                                        <th>Prioridade</th>
                                        <th>Criado em</th>
                                        <th>Agendado para</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chamados as $chamado)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $chamado->id }}</td>
                                            <td>{{ $chamado->cliente }}</td>
                                            <td>{{ $chamado->forma_de_pagamento }}</td>
                                            <td>{{ $chamado->vencimento }}</td>
                                            <td>{{ $chamado->valor }}</td>
                                            <td>{{ $chamado->criado_em }}</td>
                                            <td>{{ $chamado->dias_para_bloqueio }}</td>
                                            <td>{{ $chamado->dias_para_pendencia }}</td>

                                            <td>
                                                <a href="{{ url('/chamados/' . $chamado->id) }}" title="View chamado">
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Detalhes
                                                    </button></a>

                                                {{-- can(): Diretiva do blade que verifica se tem permissão ou não --}}
                                                {{-- Parâmetros: Nome do gate e instância do chamado, o qual terá ou não permissão. --}}
                                                @can('update-client', $chamado)
                                                    <a href="{{ url('/chamados/' . $chamado->id . '/edit') }}"
                                                        title="Edit chamado">
                                                        <button class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar
                                                        </button></a>

                                                    <form method="POST" action="{{ url('/chamados' . '/' . $chamado->id) }}"
                                                        accept-charset="UTF-8" style="display-">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete chamado"
                                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <div class="pagination-wrapper"> {!! $chamados->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
