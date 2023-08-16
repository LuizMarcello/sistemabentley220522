@extends('layouts.app')

@section('title')
    <h1>Novo Roteador</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('roteadors.index') }}">Listagem de Roteadores</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('roteadors.create') }}">Novo Roteador</a>
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
                            <a href="{{ route('roteadors.index') }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('roteadors.store') }}" method="POST">
                            @include('roteador._formRoteador')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
