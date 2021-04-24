@extends('user.layout')

@section('content')

    <section id="content" class="content-container">

        @include('user.content.breadcrumbs')

        <main id="main" class="main-container">

            @yield('main')

        </main>

    </section>

@endsection
