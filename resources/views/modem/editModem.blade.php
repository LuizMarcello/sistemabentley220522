@extends('layouts.app')

@section('title')
    <h3>Editando o modem marca {{ $modem->marca }} modelo {{ $modem->modelo }}</h3>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('modens.index', $modem) }}">Listagem de Modens</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('modens.edit', $modem) }}">Editar</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Altere os dados necessários</h3>
                        <div class="card-tools">
                            <a href="{{ route('modens.index', $modem) }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('modens.update', $modem) }}" method="POST">
                            @include('modem._formModem')
                        </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
