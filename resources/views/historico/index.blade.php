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
                <a href="{{-- {{ route('empresa.relatorios.historicos') }} --}}" class="btn btn-primary btn-sm">Históricos de serviços</a>
                <div class="card">
                    <div class="card-header">
                        <h4> Histórico </h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/historicos/create') }}" class="btn btn-success btn-sm"
                            title="Adicionar novo historico">
                            <i class="fa fa-plus" aria-hidden="true"></i> Novo histórico
                        </a>

                        <form method="GET" action="{{ url('/historicos') }}" accept-charset="UTF-8"
                            class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Pesquisar..."
                                    value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cliente atendido</th>
                                        <th>Data/Inicio</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historicos as $historico)
                                        <tr>
                                            {{--  <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $historico->id }}</td>
                                            <td>{{ $historico->cliente }}</td>
                                            <td>{{ $historico->datainicio }}</td>
                                            <td>
                                                <a href="{{ url('/historicos/' . $historico->id) }}" title="View historico">
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Detalhes
                                                    </button></a>

                                                {{-- can(): Diretiva do blade que verifica se tem permissão ou não --}}
                                                {{-- Parâmetros: Nome do gate e instância do historico, o qual terá ou não permissão. --}}
                                                {{-- @can('update-client', $historico) --}}
                                                <a href="{{ url('/historicos/' . $historico->id . '/edit') }}"
                                                    title="Edit historico">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar
                                                    </button></a>

                                                <form method="POST"
                                                    action="{{ url('/historicos' . '/' . $historico->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete historico"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                                </form>
                                                {{-- @endcan --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $historicos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
