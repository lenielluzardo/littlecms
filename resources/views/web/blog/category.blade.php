@extends('web.layout')

@section('title') 
    @php

    $module = ucfirst($viewModel->viewModule); 
    print("$module")

    @endphp 
@endsection

@section('path') 
<li>
    <a href="{{ route( "web.$viewModel->viewModule.index") }}">
        {{ ucfirst($viewModel->viewModule) }} 
    </a> / 
</li>
<li>
    {{ $viewModel->model->name }}
</li>
 @endsection



@section('module')
<ul>
    
    @foreach ($viewModel->model->entries as $item)
    <li>{{ $item->title }}</li>
    @endforeach
    
</ul>
@endsection