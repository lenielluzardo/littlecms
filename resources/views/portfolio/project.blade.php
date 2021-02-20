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
    </section>

@include('portfolio.related')
@include('partials.footer')

@endsection
