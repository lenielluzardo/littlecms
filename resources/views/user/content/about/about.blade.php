@extends('user.content.main')

@section('title', 'About')

@section('path')
    <div class="path-section">
        <h2 class="section-title"> / About </h2>
    </div>
@endsection

@extends('user.layout')

@section('main')

    @include('user.content.breadcrumbs')

    <!-- ===== M A I N ===== -->
    <main id="main" class="main-center">

        <!-- ===== A B O U T ===== -->
        <section class="about">

            <div class="about-img-container">
                <img src="{{ $model->profile_img }}" alt="that's me! :)">
            </div>

            <div class="about-description-container">
                <div class="about-description-content"> {{ $model->description }} </div>
            </div>
            {{-- @include('user.content.about.author') --}}

        </section>

    </main>

@endsection


