@extends('web.layout')

@section('title') 
    @php

    $module = ucfirst($viewModel->viewModule); 
    print("$module")

    @endphp 
@endsection

@section('breadcrumbs')

    @include('web.partial.breadcrumbs', ['paths' => $viewModel->viewPath])

@endsection

@section('module')
    
    <section class="portfolio">
        <ul class="portfolio-projects">
        @foreach ($viewModel->model as $project)
        
        @php
            $categoryName = urlencode(strtolower($project->category->name));
            $projectName = urlencode(str_replace(' ', '_', strtolower($project->title)));
        @endphp

            <a href="{{ route('web.portfolio.entry', ['category' => $categoryName,'entry' => $projectName]) }}">
               
                <li class="portfolio-projects-project card" 
                    style="background-image: url('{{ $project->thumbnail }}')">
                    
                    <h4 class="portfolio-projects-project_title"> {{ $project->title }} </h4>
                </li>
            </a>
        
        @endforeach
        </ul>
    </section>
    
@endsection

{{-- @include('partial.index', ['items' => $model->items])

@include('partial.subindex', ['items' => $model->items]) --}}



