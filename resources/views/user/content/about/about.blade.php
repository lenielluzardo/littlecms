@extends('user.content.main')

@section('title', 'About')

@section('path')
    <div class="path-section">
        <h2 class="section-title"> / About </h2>
    </div>
@endsection


@section('index')

    <!-- ===== A B O U T ===== -->
    <section class="content-section-container">

        @include('user.content.about.description')

    </section>

@endsection


