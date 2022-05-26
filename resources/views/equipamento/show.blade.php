@extends('layouts.app')

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
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">id: {{ $equipamento->id }}
                        - Detalhes do equipamento tipo: <b><i> {{ $equipamento->tipodeequipamento }} </i></b>
                        - marca: <b><i> {{ $equipamento->marca }} </b></i>
                        - modelo: <b><i> {{ $equipamento->modelo }} <b><i> </div>
                    <div class="card-body">

                        <a href="{{ url('/equipamentos') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/equipamentos/' . $equipamento->id . '/edit') }}"
                            title="Edit Equipamento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                    aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('equipamentos' . '/' . $equipamento->id) }}"
                            accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Equipamento"
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
                                        <td>{{ $equipamento->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Tipo de equipamento </th>
                                        <td> {{ $equipamento->tipodeequipamento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nota Fiscal</th>
                                        <td> {{ $equipamento->notafiscal }} </td>
                                    </tr>
                                    <tr>
                                        <th> Data da nota </th>
                                        <td> {{ $equipamento->datanota }} </td>
                                    </tr>
                                    <tr>
                                        <th> Banda </th>
                                        <td> {{ $equipamento->banda }} </td>
                                    </tr>

                                    <tr>
                                        <th> Diâmetro </th>
                                        <td> {{ $equipamento->diametro }} </td>
                                    </tr>

                                    <tr>
                                        <th> Unidade </th>
                                        <td> {{ $equipamento->unidade }} </td>
                                    </tr>

                                    <tr>
                                        <th> Quantidade </th>
                                        <td> {{ $equipamento->quantidade }} </td>
                                    </tr>

                                    <tr>
                                        <th> Marca </th>
                                        <td> {{ $equipamento->marca }} </td>
                                    </tr>
                                    <tr>
                                        <th> Modelo </th>
                                        <td> {{ $equipamento->modelo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Voltagem </th>
                                        <td> {{ $equipamento->voltagem }} </td>
                                    </tr>
                                    <tr>
                                        <th> Serial </th>
                                        <td> {{ $equipamento->serial }} </td>
                                    </tr>
                                    <tr>
                                        <th> Endereço Mac </th>
                                        <td> {{ $equipamento->macaddress }} </td>
                                    </tr>
                                    <tr>
                                        <th> Situação </th>
                                        <td> {{ $equipamento->situacao }} </td>
                                    </tr>
                                    <tr>
                                        <th> Observação </th>
                                        <td> {{ $equipamento->observacao }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
