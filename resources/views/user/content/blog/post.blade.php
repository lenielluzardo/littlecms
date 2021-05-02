<?php $title = "Post" ?>

@extends('user.content.main')

@section('main')

    <?php $title = $item->title ?>

    <!-- ===== S U B C O N T E N T ===== -->
    <section class="sub-content-container">

        <div class="box-container">

            @include("user.partial.article", ['item' => $item])

        </div>

        {{-- @include('user.partial.rating') --}}

    </div>

    </section>

    {{-- @include('user.content.blog.related') --}}

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
