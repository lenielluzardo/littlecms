@extends('master')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('/css/user.min.css')}}" type="text/css">
@endsection

@section('layout')

    <section class="user-layout">

        @include('user.header.header')

        <!-- ===== D E S K T O P ===== -->
        <section id="desktop" class="desktop-container">

            @yield('main')

        </section>

        @include('user.aside.aside')

        @include('user.footer.footer')

    </section>

    @yield('modal')
    @yield('scripts')

@endsection


