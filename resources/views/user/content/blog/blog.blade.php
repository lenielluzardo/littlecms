@extends('user.content.main')

@section('title', 'Blog')

@section('main')

    <section id="archive" class="archive-container box-container">

        @include('user.content.blog.latest')
        @include('user.content.blog.related')

    </section>

@endsection


