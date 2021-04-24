@extends('layout.master-layout')
@section('title', 'Home')

@section('layout')

    <section class="public-layout">

        @include('partial.header.header')

        @yield('content')

        @include('partial.sidebar')

        @include('partial.footer')

    </section>

@endsection

