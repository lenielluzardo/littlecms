@extends('layouts.master')

@section('content')
    @include('blog.most-recent')
    @include('blog.related')
    @include('partials.footer')
@endsection


