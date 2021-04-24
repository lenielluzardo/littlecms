@extends('user.content.main')

@section('title', 'Blog')

@section('main')

    @include('user.content.blog.latest')
    @include('user.content.blog.related')

@endsection


