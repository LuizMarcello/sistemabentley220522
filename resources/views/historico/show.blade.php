@extends('layouts.app')

@section('navbar')
    <!-- Navbar -->
    {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> --}}{{-- Original --}}
    <nav class="navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Detalhes do historico id: {{ $historico->id }}</h4>
                    </div>
                    <div class="card-body">

                        <a href="{{ url('/historicos') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/historicos/' . $historico->id . '/edit') }}" title="Edit historico"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Editar</button></a>

                        <form method="POST" action="{{ url('historicos' . '/' . $historico->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete historico"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> Deletar</button>
                        </form>
                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $historico->id }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th> User Id </th>
                                        <td> {{ $historico->user_id }} </td>
                                    </tr> --}}
                                    <tr>
                                        <th> Cliente atendido </th>
                                        <td> {{ $historico->cliente }} </td>
                                    </tr>
                                    <tr>
                                        <th> Data/Inicio do atendimento </th>
                                        <td> {{ $historico->datainicio }} </td>
                                    </tr>
                                    <tr>
                                        <th> Data do encerramento </th>
                                        <td> {{ $historico->dataencerramento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Equipamentos </th>
                                        <td> {{ $historico->equipamento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Descrição </th>
                                        <td> {{ $historico->descricao }} </td>
                                    </tr>
                                    <tr>
                                        <th> Detalhes </th>
                                        <td> {{ $historico->detalhes }} </td>
                                    </tr>
                                    <tr>
                                        <th> Situação </th>
                                        <td> {{ $historico->situacao }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
