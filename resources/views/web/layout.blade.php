@extends('master')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('/css/index.min.css')}}" type="text/css">
@endsection

@section('layout')

    <section class="user-layout">

        @include('web.navigation.header')

        <!-- ===== D E S K T O P ===== -->
        <section id="desktop" class="desktop-container">
            
            @include('web.partial.breadcrumbs')

            <main class="main">
                
                @yield('module')

            </main>

        </section>

        {{-- @include('web.aside.aside') --}}

        @include('web.footer.footer')

    </section>

    @yield('modal')
    @yield('scripts')

@endsection


