@extends('partial.main')

@section('content')
    <section class="publication-section-container">
    <section class="content-section-container">
        @include('portfolio.latest')
        {{-- @include('portfolio.related') --}}
    </section>
</section>
@endsection

