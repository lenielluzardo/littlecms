@extends('layouts.master')

@section('content')

    <section class="section-container">
        <hr class="section-separator">
        <article class="publication-container">

            <section class="publication-header">
                <h2 class="publication-title"> {{$item->title}} </h2>

                <div class="publication-meta">
                    <h3 class="publication-author">Author: {{$item->user->nickname}}</h3>
                    <h4 class="publication-date">Date: {{$item->created_at}}</h4>
                    <div class="publication-rating">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < $item->rating)
                                <span class="fas fa-star rate"></span>
                            @else
                                <span class="fas fa-star"></span>
                            @endif
                        @endfor
                    </div>

                    <div class="tags-container">
                        @foreach($item->tags as $tag)
                            <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>
                        @endforeach
                    </div>

                </div>
            </section>

            <section class="publication-body">
                <div class="publication-img-container">
                    <img src="{{$item->image1}}" alt="publication_img">
                </div>

                <div class="publication-paragraph">
                    <p> {{ $item->paragraph1 }} </p>
                    <p> {{ $item->paragraph2 }} </p>
                </div>

                <div class="publication-img-container">
                    <img src="{{$item->image2}}" alt="publication_img">
                </div>

                <div class="publication-paragraph">
                    <p> {{ $item->paragraph3}} </p>
                    <p> {{ $item->paragraph4}} </p>
                </div>

            </section>
        </article>

        <hr class="section-separator">

        @include('partials.rating-about')



    </section>

@include('blog.related')

@endsection
