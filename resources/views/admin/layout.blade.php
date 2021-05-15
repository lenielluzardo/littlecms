@extends('master')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('/css/admin.min.css')}}" type="text/css">
@endsection

@section('layout')

    <section class="admin-layout">

        @include('admin.header.header')

        <!-- ===== C O N T E N T ===== -->
        <section >

            @yield('main')

        </section>

        {{-- @include('user.aside.aside')

        @include('user.footer.footer') --}}

    </section>

    {{-- @yield('modal')
    <script src="{{asset('/js/app.js')}}"></script> --}}

@endsection


