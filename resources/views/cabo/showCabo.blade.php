@extends('layouts.app')

@section('title')
    <h4>Detalhes do cabo tipo {{ $cabo->tipodecabo }} - ID {{ $cabo->id }}</h4>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        {{-- No método "index" do controller, é injetado também o "tipo", então fica assim: --}}
        <a href="{{ route('cabos.index', $cabo) }}">Listagem de cabos</a>
    </li>

    {{-- No método "show" do controller não é injetado o "tipo", então usa o "Route Model Binding" injetado: --}}
    <li class="breadcrumb-item">
        <a href="{{ route('cabos.show', $cabo) }}">Detalhes do cabo</a>
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
                                    <i class="fas fa-globe"></i> Modelo {{ $cabo->modelo }}
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <strong>Nota Fiscal</strong>: {{ $cabo->notafiscal }} <br>
                                <strong>Data da nota</strong>: {{ $cabo->datanota }} <br>
                                <strong>Marca</strong>: {{ $cabo->marca }} <br>
                            </div>
                            <div class="col-sm-6">
                                <strong>Tipo de cabo</strong>: {{ $cabo->tipodecabo }} <br>
                                <strong>Quantidade</strong>: {{ $cabo->metros }} Metros <br>
                                <strong>Observações</strong>: {{ $cabo->observacao }} <br>
                                <strong>Situação</strong>: {{ $cabo->situacao }} <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-tools">
            <a href="{{ route('cabos.index', $cabo) }}" class="btn btn-success">Voltar</a>
        </div>
        <br>
        <div class="row">
            <div class="col-12">

                <form action="{{ route('cabos.destroy', $cabo) }}" method="POST">
                    @method('DELETE')
                    {{-- ou assim --}}
                    {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                    @csrf
                    {{-- ou assim --}}
                    {{-- {{ csrf_field() }} --}}

                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja apagar?')">
                        Excluir este cabo
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
