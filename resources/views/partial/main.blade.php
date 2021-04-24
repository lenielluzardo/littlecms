@extends('layout.master-layout')

@section('content')
<section id="main-section-container">
    @include('partial.breadcrumbs')
    <main id="main-content-container">
        @yield('main')
    </main>
</section>
@endsection
