@extends('layouts.master')

@section('content')
    @include('blog.latest')
    @include('blog.related')
    @include('partials.footer')
@endsection


