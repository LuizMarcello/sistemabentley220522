@extends('layouts.app')

@section('title')
    <h4>Detalhes do instalador {{ $instaladore->nome }} - ID {{ $instaladore->id }}</h4>

    <a href="{{ url('/instaladores') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                aria-hidden="true"></i> Voltar</button></a>
@endsection



@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('instaladores.index', $instaladore) }}">Listagem dos instaladores</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('instaladores.show', $instaladore) }}">Detalhes do instalador</a>
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
                                    <i class="fas fa-globe"></i> {{ $instaladore->nome }}
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Nome</strong>: {{ $instaladore->nome }} <br>
                                <strong>CNPJ/CPF</strong>:
                                {{-- @if (strlen($instaladore->documento) === 11) --}}
                                {{-- {{ $instaladore->documento }} --}}
                                {{-- @else --}}
                                {{ $instaladore->documento }}
                                {{--  @endif --}}
                                <br>
                                <strong>IE/RG</strong>: {{ $instaladore->ie_rg }} <br>
                                <strong>Data do cadastro</strong>: {{ $instaladore->created_at }} <br>
                                <strong>Data da última alteração</strong>: {{ $instaladore->updated_at }} <br>
                                <strong>Observações</strong>: {{ $instaladore->observacao }} <br>
                                <strong>Nome de Contato:</strong> {{ $instaladore->nome_contato }} <br>
                                <strong>Situação</strong>: {{ $instaladore->situacao }} <br>
                            </div>
                            <div class="col-sm-6">
                                <address>
                                    <strong>Rua</strong>: {{ $instaladore->rua }} <br>
                                    <strong>Número</strong>: {{ $instaladore->numero }} <br>
                                    <strong>Bairro</strong>: {{ $instaladore->bairro }} <br>
                                    <strong>Cidade</strong>: {{ $instaladore->cidade }} <br>
                                    <strong>Estado</strong>: {{ $instaladore->estado }} <br>
                                    <strong>Cep</strong>: {{ $instaladore->cep }} <br>
                                </address>
                                <strong>Data de nascimento</strong>: {{ $instaladore->dataNascimento }} <br>
                                <strong>Celular:</strong>: {{ $instaladore->celular }} <br>
                                <strong>Telefone:</strong>: {{ $instaladore->telefone }} <br>
                                <strong>Email:</strong>: {{ $instaladore->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('instaladores.destroy', $instaladore) }}" method="POST">
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
