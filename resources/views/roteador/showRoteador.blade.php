@extends('layouts.app')

@section('title')
    <h4>Detalhes do roteador modelo {{ $roteador->modelo }} - ID {{ $roteador->id }}</h4>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('roteadores.index', $roteador) }}">Listagem dos roteadores</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('roteadores.show', $roteador) }}">Detalhes do roteador</a>
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
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
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
                                    <i class="fas fa-globe"></i> Modelo {{ $roteador->modelo }}
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Nota Fiscal</strong>: {{ $roteador->notafiscal }} <br>
                                <strong>Data da nota</strong>: {{ $roteador->datanota }} <br>
                                <strong>Marca</strong>: {{ $roteador->marca }} <br>
                                <strong>Modelo</strong>: {{ $roteador->modelo }} <br>
                                <strong>Banda</strong>: {{ $roteador->banda }} <br>
                            </div>
                            <div class="col-sm-6">
                                <strong>Serial</strong>: {{ $roteador->serial }} <br>
                                <strong>Mac Address</strong>: {{ $roteador->macaddress }} <br>
                                <strong>Observações</strong>: {{ $roteador->observacao }} <br>
                                <strong>Situação</strong>: {{ $roteador->situacao }} <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('roteadores.destroy', $roteador) }}" method="POST">
                    @method('DELETE')
                    {{-- ou assim --}}
                    {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                    @csrf
                    {{-- ou assim --}}
                    {{-- {{ csrf_field() }} --}}
                    <div class="card-tools">
                        <a href="{{ route('roteadores.index', $roteador) }}" class="btn btn-success">Voltar</a>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja apagar?')">
                        Excluir este roteador
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
