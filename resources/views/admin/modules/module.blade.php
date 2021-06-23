@extends('admin.layout')

@section('title', 'Admin')

@section('main')

    @include('admin.content.tools')

    <main id="main" class="admin-main-container">

       @yield('module')

    <main>

@endsection
