@extends('master')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('/css/admin.min.css')}}" type="text/css">
@endsection

@section('layout')

    <section class="admin-layout">

        @include('admin.header.header')

        <!-- ===== C O N T E N T ===== -->
        <section id="desktop" class="admin-desktop-container" >

            @yield('toolbar')
            {{-- @include('admin.content.tools') --}}

            @yield('module')

        </section>

        {{-- @include('user.aside.aside')

        @include('user.footer.footer') --}}

    </section>

    @yield('modal')
    @yield('scripts')

@endsection


