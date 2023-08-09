@extends('layouts.app')

@section('title')
    ;
    <h1>Detalhes da designacao</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/designacoes') }}">Listagem de Designação</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ url('/designacoes' . '/' . $designaco->id) }}">Detalhes da Designação</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Designação {{ $designaco->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/designacoes') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/designacoes' . '/' . $designaco->id . '/' . 'edit') }}" title="Edit designacao"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Editar</button></a>

                        <form method="POST" action="{{ url('designacoes' . '/' . $designaco->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete designacao"
                                onclick="return confirm(&quot;Tem certeza que deseja apagar?&quot;)"><i
                                    class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                        </form>
                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $designaco->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Banda </th>
                                        <td> {{ $designaco->banda }} </td>
                                    </tr>
                                    <tr>
                                        <th> Modem </th>
                                        <td> {{ $designaco->modem }} </td>
                                    </tr>
                                    <tr>
                                        <th> Antena </th>
                                        <td> {{ $designaco->antena }} </td>
                                    </tr>
                                    <tr>
                                        <th> Lnb </th>
                                        <td> {{ $designaco->lnb }} </td>
                                    </tr>
                                    <tr>
                                        <th> Buc Transmitter </th>
                                        <td> {{ $designaco->buctransmitter }} </td>
                                    </tr>
                                    <tr>
                                        <th> ILNB </th>
                                        <td> {{ $designaco->ilnb }} </td>
                                    </tr>
                                    <tr>
                                        <th> Tria </th>
                                        <td> {{ $designaco->tria }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
