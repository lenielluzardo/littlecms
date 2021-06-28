@extends('admin.layout')

@section('title', 'Admin')

@section('main')
{{-- {{ dd("admin view") }} --}}

    {{-- @include('admin.content.tools') --}}

    <main id="main" class="admin-main-container">

        <section class="module">

            @foreach($modules as $module)

                <a href="{{ route($module->route, strtolower($module->name)) }}"> {{ $module->name }}</a>

            @endforeach

        </section>

    <main>

@endsection
