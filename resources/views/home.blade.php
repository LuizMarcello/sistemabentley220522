@extends('layouts.app')

@section('title')
    <h1>Dashboard</h1>
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

            {{-- Mostrando o breadcrumb (barra de navegação)end
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
    @endsection

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('Você está logado(a). Bom trabalho, ') }}
                            {{ Auth::user()->name }}
                            {{ __(' !!') }}
                        </div>
                    </div>
                    <br>
                    <div class="nav-item">
                        <a href="{{ route('medirvelocidades.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-satellite-dish"> </i>
                            <p>Medir velocidade do seu link</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    @endsection
