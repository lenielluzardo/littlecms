@extends('layout.master')

@section('main')
<section id="main-section-container">
    @include('partial.breadcrumbs')
    <main id="main-content-container">
        @yield('content')
    </main>
</section>
@endsection
