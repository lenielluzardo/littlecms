@extends('user.content.main')

@section('title', 'Blog')

@section('index')

    <!-- ===== S U B C O N T E N T ===== -->
    @include('user.partial.archive')

@endsection


@section('subindex')

    @foreach ($items as $item )

        @include('user.partial.entry', ['item' => $item])

    @endforeach

@endsection


    {{-- @include('user.content.blog.latest') --}}
