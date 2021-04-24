@extends('layout.public-layout')

@section('title', 'Blog')

@section('content')

    @include('blog.latest')
    @include('blog.related')

@endsection


