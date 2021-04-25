@extends('user.content.main')

@section('title', 'Blog')

@section('main')

    <!-- ===== S U B C O N T E N T ===== -->
    @include('user.content.blog.latest')
    <!-- ===== S U B C O N T E N T ===== -->
    @include('user.content.blog.related')

@endsection


