@extends('master')
@section('title', 'Home')

@section('layout')

    <section class="user-layout">

        @include('user.header.header')

        <!-- ===== C O N T E N T ===== -->
        <section id="content" class="content-container">

            @yield('main')

        </section>

        @include('user.aside.aside')

        @include('user.footer.footer')

    </section>

    @yield('modal')
    <script src="{{asset('/js/app.js')}}"></script>

@endsection


