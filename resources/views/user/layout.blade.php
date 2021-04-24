@extends('master')
@section('title', 'Home')

@section('layout')

    <section class="user-layout">

        @include('user.header.header')

        @yield('content')

        @include('user.aside.aside')

        @include('user.footer.footer')

    </section>

@endsection

