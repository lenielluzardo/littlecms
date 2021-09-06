@extends('master')

@section('stylesheets') 

    <link rel="stylesheet" href="{{asset('/css/admin/index.min.css')}}" type="text/css">

@endsection

@section('title')
Admin
@endsection

@section('layout')

   <section class="admin-layout">
   
      @include('admin.partial.module_navigation')
      
      <main class="module">

         @yield('module')
      
      <main>
   
   </section>
    
   @yield('scripts')
    
   @yield('modal')

@endsection
