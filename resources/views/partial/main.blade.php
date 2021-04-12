@extends('layout.master')

@section('main')
<section id="main-section-container">
    <nav height="50" id="breadcrumbs">
        @include('partial.breadcrumbs')
    </nav>
    <main id="main-content-container">
        @yield('content')
    </main>
</section>
@endsection
