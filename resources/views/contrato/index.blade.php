@extends('layouts.app')

@section('navbar')
<!-- Navbar -->
<!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
<!-- Original -->
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
            {{-- <a href="{{ route('empresa.relatorios.contrato') }}" class="btn btn-primary btn-sm">Relatório de contrato</a> --}}
            <div class="card">
                <div class="card-header">
                    <h4> Contratos</h4>
                </div>
                <div class="card-body">

                    <form method="GET" action="{{ url('/contratos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-2 {{-- float-right --}}" role="search">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Pesquisar por nº do contrato, cliente nome, e-mail e CPF/CNPJ" value="{{ request('search') }}">
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
                        <a href="{{ url('/contratos/create') }}" class="btn btn-success btn-md" title="Adicionar novo contrato" data-toggle="modal" data-target="#modelcontrato">
                            <i class="fa fa-plus" aria-hidden="true"></i> Novo contrato
                        </a>
                    </div>

                    <!-- ===MODAL=== -->
                    <div class="modal fade" id="modelcontrato" tabindex="-1" aria-labelledby="modelcontratoLabel">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modelcontratoLabel">Cadastrar contrato</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{ route('contratos.create') }}"></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    {{-- <button type="button" class="btn btn-primary">Cadastrar</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ===MODAL=== -->

                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Forma de pagamento</th>
                                    <th>Vencimento</th>
                                    <th>Valor</th>
                                    <th>Criado em</th>
                                    <th>Data bloqueio</th>
                                    <th>Data pendência</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contratos as $contrato)
                                <tr>
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $contrato->id }}</td>
                                    <td>{{ $contrato->cliente }}</td>
                                    <td>{{ $contrato->forma_de_pagamento }}</td>
                                    <td>{{ $contrato->vencimento }}</td>
                                    <td>{{ $contrato->valor }}</td>
                                    <td>{{ $contrato->criado_em }}</td>
                                    <td>{{ $contrato->dias_para_bloqueio }}</td>
                                    <td>{{ $contrato->dias_para_pendencia }}</td>

                                    <td>
                                        <a href="{{ url('/contratos/' . $contrato->id) }}" title="View contrato">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa fa-eye" aria-hidden="true"></i> Detalhes
                                            </button></a>

                                        <!-- can(): Diretiva do blade que verifica se tem permissão ou não -->
                                        <!-- Parâmetros: Nome do gate e instância do contrato, o qual terá ou não permissão. -->
                                        @can('update-client', $contrato)
                                        <a href="{{ url('/contratos/' . $contrato->id . '/edit') }}" title="Edit contrato">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar
                                            </button></a>

                                        <form method="POST" action="{{ url('/contratos' . '/' . $contrato->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete contrato" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $contratos->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
