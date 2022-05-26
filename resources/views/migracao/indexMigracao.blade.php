@extends('layouts.app')

@section('title')
    <h1>Listagem de Migrações</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('migracao.index') }}">Listagem de Migrações</a>
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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listagem de Migrações</h3>
                        <div class="card-tools">
                            <a href="{{ route('migracao.create') }}" class="btn btn-success">Nova
                                Migração</a>
                        </div>
                    </div>


                    {{-- O corpo --}}
                    <div class="card-body">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th style="width: 10px"></th>
                                    <th>Nome da empresa</th>
                                    <th>Nome do contato</th>
                                    <th>Celular</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($registros as $registro)
                                    <tr>
                                        <td>{{ $registro->id }}</td>
                                        <td>{{ $registro->nome }}</td>
                                        <td>{{ $registro->nome_contato }}</td>
                                        <td>{{ $registro->celular }}</td>
                                        <td><a href="" class="btn btn-primary btn-sm">Detalhes</a></td>
                                    </tr>
                                @endforeach
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
