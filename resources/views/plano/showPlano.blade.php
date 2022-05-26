@extends('layouts.app')

@section('title')
    <h4>Detalhes do plano {{ $plano->nome }} {{ $plano->banda }} - ID {{ $plano->id }}</h4>
    <div class="card-tools">
        <a href="{{ route('planos.index', $plano) }}" class="btn btn-success">Voltar</a>
    </div>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('planos.index', $plano) }}">Listagem dos planoes</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('planos.show', $plano) }}">Detalhes do plano</a>
    </li>
@endsection

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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    {{-- O corpo --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Plano {{ $plano->nome }}
                                </h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Nome</strong>: {{ $plano->nome }} <br>
                                <strong>Banda</strong>: {{ $plano->banda }} <br>
                                <strong>Cir</strong>: {{ $plano->cir }} <br>
                                <strong>Equipamento</strong>: {{ $plano->equipamento }} <br>
                                <strong>Observações</strong>: {{ $plano->observacao }} <br>
                                <strong>Situação</strong>: {{ $plano->situacao }} <br>
                            </div>
                            <div class="col-sm-6">
                                <strong>Valor de custo</strong>: {{ $plano->valordecusto }} <br>
                                <strong>Valor mensal</strong>: {{ $plano->valormensal }} <br>
                                <strong>Veloc máxima de down</strong>: {{ $plano->velocmaxdown }} <br>
                                <strong>Veloc máxima de up</strong>: {{ $plano->velocmaxup }} <br>
                                <strong>Veloc mínima de down</strong>: {{ $plano->velocmindown }} <br>
                                <strong>Veloc mínima de up</strong>: {{ $plano->velocminup }} <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('planos.destroy', $plano) }}" method="POST">
                    @method('DELETE')
                    {{-- ou assim --}}
                    {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                    @csrf
                    {{-- ou assim --}}
                    {{-- {{ csrf_field() }} --}}
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir?')">
                        Excluir este plano
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
