@extends('partial.main')

@section('content')
<section class="publication-section-container">
    <section class="content-section-container">
        <article class="publication-container">
            <section class="publication-img-container">
                <img src="{{$item->image1}}" alt="publication_img">
            </section>
            <section class="portfolio-meta">
                <h2 class="publication-title"> {{$item->title}} </h2>
                <h5 class="publication-date"> {{$item->created_at}} </h2>
            </section>
            <section class="portfolio-description">
                <div  class="publication-paragraph">
                    <p> {{ $item->paragraph1 }} </p>
                    <p> {{ $item->paragraph2 }} </p>
                </div>

                <div class="publication-img-container">
                    <img src="{{$item->image2}}" alt="publication_img">
                </div>
                <p> {{ $item->paragraph3}} </p>
                <p> {{ $item->paragraph4}} </p>
            </section>
        </section>
    </article>
</section>
@endsection
