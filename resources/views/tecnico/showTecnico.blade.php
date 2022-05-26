@extends('layouts.app')

@section('title')
    <h4>Detalhes do instalador {{ $tecnico->nome }} - ID {{ $tecnico->id }}</h4>

    <a href="{{ url('/tecnicos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                aria-hidden="true"></i> Voltar</button></a>
@endsection



@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('tecnicos.index', $tecnico) }}">Listagem dos instaladores</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('tecnicos.show', $tecnico) }}">Detalhes do instalador</a>
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
                                    <i class="fas fa-globe"></i> {{ $tecnico->nome }}
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Nome</strong>: {{ $tecnico->nome }} <br>
                                <strong>CNPJ/CPF</strong>:
                                @if (strlen($tecnico->documento) === 11)
                                    {{ mascara($tecnico->documento, '###.###.###-##') }}
                                @else
                                    {{ mascara($tecnico->documento, '##.###.###/####-##') }}
                                @endif
                                <br>
                                <strong>IE/RG</strong>: {{ mascara($tecnico->ie_rg, '#.###.###-#') }} <br>
                                <strong>Data do cadastro</strong>: {{ $tecnico->created_at }} <br>
                                <strong>Data da última alteração</strong>: {{ $tecnico->updated_at }} <br>
                                <strong>Observações</strong>: {{ $tecnico->observacao }} <br>
                                <strong>Nome de Contato:</strong> {{ $tecnico->nome_contato }} <br>
                                <strong>Situação</strong>: {{ $tecnico->situacao }} <br>
                            </div>
                            <div class="col-sm-6">
                                <address>
                                    {{ $tecnico->rua }}, {{ $tecnico->numero }} <br>
                                    {{ $tecnico->bairro }}, {{ $tecnico->cidade }} - {{ $tecnico->estado }}<br>
                                    {{ mascara($tecnico->cep, '#####-###') }} <br>
                                </address>
                                <strong>Data de nascimento</strong>: {{ $tecnico->dataNascimento }} <br>
                                <strong>Celular:</strong>: {{ mascara($tecnico->celular, '(##) #####-####') }} <br>
                                <strong>Telefone:</strong>: {{ mascara($tecnico->telefone, '(##) ####-####') }} <br>
                                <strong>Email:</strong>: {{ $tecnico->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ route('tecnicos.destroy', $tecnico) }}" method="POST">
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
