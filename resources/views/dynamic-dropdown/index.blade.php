@extends('layouts.app')

@section('title')
    <h1>Estados brasileiros e seus municipios</h1>
@endsection

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm-rounded-lg">
            @include('dynamic-dropdown.dynamic-dropdown');
        </div>
    </div>
</div>
