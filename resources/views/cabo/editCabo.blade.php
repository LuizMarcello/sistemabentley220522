@extends('layouts.app')

@section('title')
    <h3>Editando o cabo {{ $cabo->tipodecabo }} marca {{ $cabo->marca }}</h3>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('cabos.index', $cabo) }}">Listagem de Cabos</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('cabos.edit', $cabo) }}">Editar</a>
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
                            <a href="{{ route('cabos.index', $cabo) }}" class="btn btn-success card-tools">Voltar</a>
                        </div>
                    </div>


                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('cabos.update', $cabo) }}" method="POST">
                             {{-- {{ csrf_field() }} --}}
                             @method('PUT')
                             {{-- ou assim --}}
                             {{-- <input type="hidden" name="_method" value="put"> --}}
                            @include('cabo._formCabo')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
