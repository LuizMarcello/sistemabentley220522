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
            <li class="nav-item d-none d-sm-inline-block">
                <div class="nav-link">
                    <a href="{{ route('home') }}">Home</a>
                </div>

            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contato</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                {{--  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
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
                {{-- <a href="{{ route('empresa.relatorios.modelocontrato') }}" class="btn btn-primary btn-sm">Relatório de modelocontrato</a> --}}
                <div class="card">
                    <div class="card-header">
                        <h4> Modelos de contrato</h4>
                    </div>
                    <div class="card-body">

                        <form method="GET" action="{{ url('/modelocontratos') }}" accept-charset="UTF-8"
                            class="form-inline my-2 my-lg-2 {{-- float-right --}}" role="search">

                        </form>

                        <br />

                        <a href="{{ url('/modelocontratos/create') }}" class="btn btn-success btn-md"
                            title="Adicionar novo modelo de contrato" data-toggle="modal" data-target="#modelcontrato">
                            <i class="fa fa-plus" aria-hidden="true"></i> Novo modelo de contrato
                        </a>

                        {{-- ===MODAL=== --}}
                        <div class="modal fade" id="modelcontrato" tabindex="-1" aria-labelledby="modelcontratoLabel">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelcontratoLabel">Cadastrar modelo de contrato</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                src="{{ route('modelocontratos.create') }}"></iframe>
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
                                        <th>Id</th>
                                        <th>Nome da empresa</th>
                                        <th>Nome do cliente</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($modelocontratos as $modelocontrato)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $modelocontrato->id }}</td>
                                            <td>{{ $modelocontrato->empresa_nome }}</td>
                                            {{-- <td>{{ $contrato->forma_de_pagamento }}</td> --}}
                                            <td>{{ $modelocontrato->cliente_nome }}</td>
                                            {{-- <td>{{ $contrato->valor }}</td> --}}
                                            <td>{{ $modelocontrato->cliente_endereco_cidade }}</td>
                                            {{-- <td>{{ $contrato->dias_para_bloqueio }}</td> --}}
                                            <td>{{ $modelocontrato->cliente_endereco_estado }}</td>

                                            <td>
                                                <a href="{{ url('/modelocontratos' . '/' . $modelocontrato->id) }}"
                                                    title="View modelocontrato">
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Detalhes
                                                    </button></a>

                                                {{-- can(): Diretiva do blade que verifica se tem permissão ou não --}}
                                                {{-- Parâmetros: Nome do gate e instância do modelocontrato, o qual terá ou não permissão. --}}
                                                @can('update-client', $modelocontratos)
                                                    <a href="{{ url('/modelocontratos' . '/' . $modelocontrato->id . '/edit') }}"
                                                        title="Edit modelocontrato">
                                                        <button class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar
                                                        </button></a>

                                                    <form method="POST"
                                                        action="{{ url('/modelocontratos' . '/' . $modelocontrato->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete modelocontrato"
                                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $modelocontratos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
