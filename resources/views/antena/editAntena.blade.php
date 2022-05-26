@extends('layouts.app')

@section('title')
    <h3>Editando antena modelo: {{ $antena->modelo }}</h3>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('antenas.index', $antena) }}">Listagem de Antenas</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('antenas.edit', $antena) }}">Editar</a>
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
                            <a href="{{ route('antenas.index', $antena) }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('antenas.update', $antena) }}" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @method('PUT')
                            {{-- ou assim --}}
                            {{-- <input type="hidden" name="_method" value="put"> --}}
                            @include('antena._formAntena')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
