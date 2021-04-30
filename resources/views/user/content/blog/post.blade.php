<?php $title = "Post" ?>

@extends('user.content.main')

@section('main')

    <?php $title = $item->title ?>

    <!-- ===== S U B C O N T E N T ===== -->
    <section class="sub-content-container">

        <div class="box-container">

            <article id="post-{{$item->id}}" class="box-item single-entry">

               <div class="box-item-title-container single-entry-title">
                   <h2 > {{$item->title}} </h2>
               </div>

               <div class="box-item-img-container">
                   <img src="{{$item->image1}}" alt="{{$item->title}}">
               </div>

                <section class="box-item-meta-container">

                    <p class="box-item-author">By: {{$item->user->nickname}}</p>

                    <p class="box-item-date">{{$item->created_at}}</p>

                    <div class="box-item-tags-container">

                        @foreach($item->tags as $tag)
                            <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>
                        @endforeach

                    </div>

                </section>

                <section class="box-item-content-container single-entry-content">

                    <p> {!! $item->paragraph1 !!} </p><br>
                    <p> {!! $item->paragraph2 !!} </p><br>
                    <p> {!! $item->paragraph3 !!} </p><br>
                    <p> {!! $item->paragraph4 !!} </p><br>

                </section>

            </article>

        <div>

        @include('user.partial.rating')

    </div>

    </section>

    @include('user.content.blog.related')

@endsection

{{-- <div class="post-rate">
    @for($i = 0; $i < 5; $i++)
        @if($i < $item->rating)
            <span class="fas fa-star rate"></span>
        @else
            <span class="fas fa-star"></span>
        @endif
    @endfor
</div> --}}
@section('title') <?php print("$item->title") ?> @endsection
