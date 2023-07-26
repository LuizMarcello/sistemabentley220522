@extends('layouts.app')

@section('title')
    <h1>Listagem de representantes</h1>
@endsection

{{-- @section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('representantes.index') }}">Listagem de representantes</a>
    </li>
@endsection --}}

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
                    <div class="card-header">
                        <h3 class="card-title">Listagem de representantes</h3>
                        <div class="card-tools">
                            <a href="{{ route('representantes.create') }}" class="btn btn-success">Novo
                                representante</a>
                        </div>
                    </div>


                    {{-- O corpo --}}
                    <div class="card-body">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th style="width: 10px"></th>
                                    <th>Id</th>
                                    <th>Nome da empresa</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($registros as $registro)
                                    <tr>
                                        <td></td>
                                        <td>{{ $registro->id }}</td>
                                        <td>{{ $registro->razao_social }}</td>
                                        <td>{{ $registro->cidade }}</td>
                                        <td>{{ $registro->estado }}</td>
                                        <td><a href="{{ route('representantes.show', $registro) }}"
                                                class="btn btn-primary btn-sm">Detalhes</a>
                                            <a href="{{ route('representantes.edit', $registro) }}"
                                                class="btn btn-danger btn-sm">Atualizar</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Nenhum item cadastrado</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        {{-- O laravel/blade já mostra a paginação no padrâo do bootstrap --}}
                        {{ $registros->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
