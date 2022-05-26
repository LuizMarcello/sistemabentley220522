@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header"><h4>  Criando novo contrato</h4></div> --}}
                    <div class="card-body">
                        {{-- <a href="{{ url('/contratos') }}" title="Back"><button class="btn btn-warning
                             btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br /> --}}
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/contratos') }}" accept-charset="UTF-8"
                         class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('contratos.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
