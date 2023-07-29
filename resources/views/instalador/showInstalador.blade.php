@extends('layouts.app')

@section('title')
    <h4>Detalhes do instalador {{ $instalador->nome }} - ID {{ $instalador->id }}</h4>

    {{-- <a href="{{ url('/instaladores') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                aria-hidden="true"></i> Voltar</button></a> --}}

    <div class="card-tools">
        <a href="{{ route('instaladores.index', $instalador) }}" class="btn btn-success">Voltar</a>
    </div>
@endsection



@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('instaladores.index', $instalador) }}">Listagem dos instaladores</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('instaladores.show', $instalador) }}">Detalhes do instalador</a>
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
                                    <i class="fas fa-globe"></i> {{ $instalador->nome }}
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Nome</strong>: {{ $instalador->nome }} <br>
                                <strong>CNPJ/CPF</strong>:
                                @if (strlen($instalador->documento) === 11)
                                    {{ $instalador->documento }}
                                @else
                                    {{ $instalador->documento }}
                                @endif
                                <br>
                                <strong>IE/RG</strong>: {{ $instalador->ie_rg }} <br>
                                <strong>Data do cadastro</strong>: {{ $instalador->created_at }} <br>
                                <strong>Data da última alteração</strong>: {{ $instalador->updated_at }} <br>
                                <strong>Observações</strong>: {{ $instalador->observacao }} <br>
                                <strong>Nome de Contato:</strong> {{ $instalador->nome_contato }} <br>
                                <strong>Situação</strong>: {{ $instalador->situacao }} <br>
                            </div>
                            <div class="col-sm-6">
                                <address>
                                    {{ $instalador->rua }} <br>
                                    <strong>Número:</strong> {{ $instalador->numero }} <br>
                                    <strong>Bairro:</strong> {{ $instalador->bairro }} <br>
                                    <strong>Cidade:</strong> {{ $instalador->cidade }} <br>
                                    <strong>Estado:</strong> {{ $instalador->estado }}<br>
                                    <strong>Cep:</strong> {{ $instalador->cep }}
                                </address>
                                <strong>Data de nascimento</strong>: {{ $instalador->dataNascimento }} <br>
                                <strong>Celular:</strong>: {{ $instalador->celular }} <br>
                                <strong>Telefone:</strong>: {{ $instalador->telefone }} <br>
                                <strong>Email:</strong>: {{ $instalador->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('instaladores.destroy', $instalador) }}" method="POST">
                    @method('DELETE')
                    {{-- ou assim --}}
                    {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                    @csrf
                    {{-- ou assim --}}
                    {{-- {{ csrf_field() }} --}}
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir?')">
                        Excluir este instalador
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
