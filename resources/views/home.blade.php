@extends('layout.layout')
@section('title', 'Home Dx-Blog')

@section('container')

    @include('components.search')

    <div class="row tm-row">
        @include('components.article')

    </div>

    @include('components.pagination')

@endsection
