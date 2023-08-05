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
                {{--   <a class="nav-link" data-widget="navbar-search" href="#" role="button">
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
                        <h4> contrato id: {{ $contrato->id }}</h4>
                    </div>
                    <div class="card-body">

                        <a href="{{ url('/contratos') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true">
                                </i> Voltar</button></a>
                        <a href="{{ url('/contratos' . '/' . $contrato->id . '/' . 'edit') }}" title="Edit contrato"><button
                                class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Editar</button></a>

                        <form method="POST" action="{{ url('contratos' . '/' . $contrato->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete contrato"
                                onclick="return confirm('Confirm delete?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                        </form>

                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $contrato->id }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th> User Id </th>
                                        <td> {{ $contrato->user_id }} </td>
                                        </tr> --}}
                                    <tr>
                                        <th> Cliente </th>
                                        <td> {{ $contrato->cliente }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cortesia </th>
                                        <td> {{ $contrato->cortesia }} </td>
                                    </tr>
                                    <tr>
                                        {{-- <th> CPF/CNPJ </th>
                                        @if (strlen($contrato->documento) === 11)
                                            <td> {{ $contrato->documento }} </td>
                                        @else
                                            <td> {{ $contrato->documento }} </td>
                                        @endif --}}

                                        <th> Desconto </th>
                                        <td> {{ $contrato->desconto }} </td>
                                    </tr>
                                    <tr>
                                        <th> Mensagem automática de pendências </th>
                                        <td> {{ $contrato->msg_pend_automatica }} </td>
                                    </tr>
                                    <tr>
                                        <th> Dias pendentes </th>
                                        <td> {{ $contrato->dias_para_pendencia }} </td>
                                    </tr>
                                    <tr>
                                        <th> Acrescimo </th>
                                        <td> {{ $contrato->acrescimo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Mensagem automática de bloqueio </th>
                                        <td> {{ $contrato->msg_bloqueio_automatica }} </td>
                                    </tr>
                                    <tr>
                                        <th> Dias para bloqueio </th>
                                        <td> {{ $contrato->dias_para_bloqueio }} </td>
                                    </tr>
                                    <tr>
                                        <th> Dia do pagamento </th>
                                        <td> {{ $contrato->dia_de_pagamento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Forma de pagamento </th>
                                        <td> {{ $contrato->forma_de_pagamento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Modelo de contrato </th>
                                        <td> {{ $contrato->modelo_de_contrato }} </td>
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
