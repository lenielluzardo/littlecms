@extends('user.layout')

@section('content')

    @include('user.content.breadcrumbs')

    <!-- ===== M A I N ===== -->
    <main id="main" class="main-container">

        <!-- ===== C O N T E N T ===== -->
        <section id="index" class="index-container box-container">

            @yield('main')

        </section>

    </main>

@endsection
