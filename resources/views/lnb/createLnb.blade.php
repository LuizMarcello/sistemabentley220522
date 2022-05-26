@extends('layouts.app')

@section('title')
    <h1>Novo Lnb</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('lnbs.index') }}">Listagem de Lnbs</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('lnbs.create') }}">Novo Lnb</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Entre com os dados</h3>
                        <div class="card-tools">
                            <a href="{{ route('lnbs.index') }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('lnbs.store') }}" method="POST">
                            @include('lnb._formLnb')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
