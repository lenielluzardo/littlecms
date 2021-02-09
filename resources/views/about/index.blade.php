@extends('layouts.master')
@section('content')

<section class="p_body">
    <div class="p_img-container">
        <img id="p_img" src="{{$author->url1}}" alt="publication_img">
    </div>

    <div class="p_paragraphs pc">
        <p> {{ $author->about1 }} </p>

        <p> {{ $author->about2 }} </p>
    </div>

    <div class="p_img-container">
        <img id="p_img" src="{{$author->url2}}" alt="publication_img">
    </div>

</section>

<hr class="section-separator">

@include('partials.footer')
@endsection


