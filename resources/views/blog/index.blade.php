@extends('partial.main')

@section('content')

    <section class="publication-section-container">
        @include('blog.latest')
        @include('blog.related')
    </section>

@endsection


