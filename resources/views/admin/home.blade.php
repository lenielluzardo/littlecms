@extends('admin.layout')

@section('title', 'Admin')

@section('main')
{{-- {{ dd("admin view") }} --}}

    {{-- @include('admin.content.tools') --}}

    <main id="main" class="admin-main-container">

       @include('admin.dashboard')

    <main>

@endsection
