@extends('layouts.app')

@section('title')
    <h1>Listagem de Antenas</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('antenas.index') }}">Listagem de Antenas</a>
    </li>
@endsection

@section('navbar')
    <!-- Navbar -->
    {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> --}}{{-- Original --}}
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
                        <h3 class="card-title">Listagem de Antenas</h3>
                        <div class="card-tools">
                            <a href="{{ route('antenas.create') }}" class="btn btn-success">Nova
                                Antena</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px"></th>
                                    <th>Id</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($registros as $registro)
                                    <tr>
                                        <td></td>
                                        <td>{{ $registro->id }}</td>
                                        <td>{{ $registro->marca }}</td>
                                        <td>{{ $registro->modelo }}</td>
                                        <td><a href="{{ route('antenas.show', $registro) }}"
                                                class="btn btn-primary btn-sm">Detalhes</a>
                                            <a href="{{ route('antenas.edit', $registro) }}"
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
