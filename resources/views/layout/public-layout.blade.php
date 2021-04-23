@extends('layout.master-layout')

@section('layout')
    <section class="public-layout">
        @include('partial.header')
        @yield('content')
    </section>
{{-- @yield('header') --}}

@endsection
{{-- @extends('layout.master')

@section('layout')
    @yield('header')

        @show
    @yield('main')

    @yield('main')
    @yield('sidebar')
    @yield('footer')

    @include('partial.header')
    @include('partial.sidebar')
    @include('partial.footer')
@endsection --}}
