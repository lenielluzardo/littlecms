@extends('layout.master')

@section('content')

    <section id="blog-section-container">
        @include('blog.latest')
        @include('blog.related')
    </section>

@endsection


