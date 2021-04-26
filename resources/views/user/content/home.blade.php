@extends('user.layout')

@section('title', 'Home')

@section('content')

        <section id="home" class="home-container">

            @include('user.partial.modal', ['modal' => $modal])

        </section>

@endsection
