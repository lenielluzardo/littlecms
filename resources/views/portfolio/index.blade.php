@extends('partial.main')

@section('content')
    <section class="publication-section-container">
        @include('portfolio.latest')
        @include('portfolio.related')
    </section>
@endsection

