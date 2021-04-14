@extends('partial.main')

@section('content')
<section class="publication-section-container">
    <section class="content-section-container">
        <article class="publication-container">

            <section class="post-header">
                <h2 class="publication-title post-title"> {{$item->title}} </h2>
                <div class="post-meta">
                    <h3 class="post-author">By: {{$item->user->nickname}}</h3>
                    <h5 class="publication-date post-date">{{$item->created_at}}</h4>
                    <div class="post-rate">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < $item->rating)
                                <span class="fas fa-star rate"></span>
                            @else
                                <span class="fas fa-star"></span>
                            @endif
                        @endfor
                    </div>

                    <div class="post-tags-container">
                        @foreach($item->tags as $tag)
                            <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>
                        @endforeach
                    </div>

                </div>
            </section>

            <section class="post-body">
                <div class="publication-img-container">
                    <img src="{{$item->image1}}" alt="post_img">
                </div>

                <div class="publication-paragraph">
                    <p> {{ $item->paragraph1 }} </p>
                    <p> {{ $item->paragraph2 }} </p>
                </div>

                <div class="publication-img-container">
                    <img src="{{$item->image2}}" alt="post_img">
                </div>

                <div class="publication-paragraph">
                    <p> {{ $item->paragraph3}} </p>
                    <p> {{ $item->paragraph4}} </p>
                </div>

            </section>
        </article>

        @include('partial.rating')
    </section>

    {{-- @include('about.description') --}}
    @include('blog.related')

</section>
@endsection
