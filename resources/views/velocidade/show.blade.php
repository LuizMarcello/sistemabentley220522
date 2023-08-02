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
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
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
    </nav>
    <!-- /.navbar -->
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <a href="{{ route('home') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-14">
                                    <div class="row">
                                        {{--  <iframe src="https://beta.simet.nic.br/widget.html" height="780" width="430" style="border:none"></iframe> --}}
                                        <iframe src="https://beta.simet.nic.br/widget.html" height="320" width="780"
                                            style="border:none"></iframe>
                                    </div>
                                    {{--  <img src="{!! asset('img/icone-76.png') !!}"> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
