@extends('layouts.app')

@section('title')
    <h4>Detalhes do representante {{ $representante->nome }} - ID {{ $representante->id }}</h4>
    <div class="card-tools">
        <a href="{{ route('representantes.index', $representante) }}" class="btn btn-success">Voltar</a>
    </div>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('representantes.index', $representante) }}">Listagem dos representantes</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('representantes.show', $representante) }}">Detalhes do representante</a>
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
                                    <i class="fas fa-globe"></i> {{ $representante->nome }}
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Nome</strong>: {{ $representante->nome }} <br>
                                <strong>Razão Social</strong>: {{ $representante->razao_social }} <br>
                                <strong>CNPJ/CPF</strong>: {{ $representante->documento }} <br>
                                <strong>IE/RG</strong>: {{ mascara($representante->ie_rg, '#.###.###-2') }} <br>
                                <strong>Data do cadastro</strong>: {{ $representante->created_at }} <br>
                                <strong>Data da última alteração</strong>: {{ $representante->updated_at }} <br>

                                <strong>Nome de Contato:</strong> {{ $representante->nome_contato }} <br>
                                <strong>Situação</strong>: {{ $representante->situacao }} <br>
                            </div>
                            <div class="col-sm-6">
                                <address>
                                    {{ $representante->rua }}, {{ $representante->numero }} <br>
                                    {{ $representante->bairro }}, {{ $representante->cidade }} -
                                    {{ $representante->estado }}<br>
                                    {{ $representante->cep }} <br>
                                </address>
                                {{-- <strong>Data de nascimento</strong>: {{ $representante->dataNascimento }} <br> --}}
                                <strong>Celular:</strong> {{ $representante->celular }} <br>
                                <strong>Telefone:</strong> {{ $representante->telefone }} <br>
                                <strong>Email:</strong> {{ $representante->email }} <br>
                                <strong>Observações</strong>: {{ $representante->observacao }} <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('representantes.destroy', $representante) }}" method="POST">
                    @method('DELETE')
                    {{-- ou assim --}}
                    {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                    @csrf
                    {{-- ou assim --}}
                    {{-- {{ csrf_field() }} --}}
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir?')">
                        Excluir este representante
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
