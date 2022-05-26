@extends('layouts.app')

@section('title')
    <h1>Novo Ilnb</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('ilnbs.index') }}">Listagem de Ilnbs</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('ilnbs.create') }}">Novo Ilnb</a>
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
                            <a href="{{ route('ilnbs.index') }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('ilnbs.store') }}" method="POST">
                            @include('ilnb._formIlnb')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
