@extends('layouts.app')

@section('links')
    @parent
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
@stop

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    @include('admin.content')
@endsection

@section('js')
    @parent
    {{-- <script src="{{ asset('assets/js/index.js')}}"></script> --}}
@stop
