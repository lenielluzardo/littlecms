@extends('layouts.master')

@section('content')

    <section class="section-container">

        <hr class="section-separator">

        <article class="p_container">

            <section id="p_header">

                <h2 id="p_title"> {{ $project->title }} </h2>

                <div id="p_meta">

                    <h3 id="p_author">Author: {{ $project->user->nickname }}</h3>

                    <h4 id="p_date">Date: {{ $project->created_at }}</h4>

                    <div id="p_rating">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < $project->rating )
                                <span class="fas fa-star rate"></span>
                            @else
                                <span class="fas fa-star"></span>
                            @endif
                        @endfor
                    </div>

                    <div id="p_tags">
                            <span class="tag"><a href="">{{ $project->tag->name }}</a></span>
                    </div>

                </div>

            </section>

            <section class="p_body">

                <div class="p_img-container">
                    <img id="p_img" src="{{ $project->image1 }}" alt="publication_img">
                </div>

                <div class="p_paragraphs">
                    <p> {{ $project->paragraph1 }} </p>

                    <p> {{ $project->paragraph2 }} </p>
                </div>

                <div class="p_img-container">
                    <img id="p_img" src="{{ $project->image2 }}" alt="publication_img">
                </div>

                <div class="p_paragraphs">
                    <p> {{ $project->paragraph3 }} </p>

                    <p> {{ $project->paragraph4}} </p>
                </div>

            </section>

        </article>

        <hr class="section-separator">

        @include('partials.rating-about')



    </section>

@include('blog.related')

@endsection
