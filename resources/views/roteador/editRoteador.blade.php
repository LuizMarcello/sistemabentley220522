@extends('layouts.app')

@section('title')
    <h3>Editando o roteador modelo {{ $roteador->modelo }} marca {{ $roteador->marca }}</h3>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('roteadors.index', $roteador) }}">Listagem de Roteadores</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('roteadors.edit', $roteador) }}">Editar</a>
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
                            <a href="{{ route('roteadors.index', $roteador) }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('roteadors.update', $roteador) }}" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @method('PUT')
                            {{-- ou assim --}}
                            {{-- <input type="hidden" name="_method" value="put"> --}}
                            @include('roteador._formRoteador')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
