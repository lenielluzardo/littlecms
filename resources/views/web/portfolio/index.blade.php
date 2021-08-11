@extends('web.layout')

@section('title') 
    @php
        $module = ucfirst($viewModel->viewModule); 
        print("$module")
    @endphp 
@endsection

@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{ $module  }} </h2>
    </div>
@endsection

@section('module')
    
    <section class="module portfolio">
        <ul class="portfolio-projects">
        @foreach ($viewModel->model as $project)
        
            <a href="{{ route('web.portfolio.project', ['projectName' => urlencode(str_replace(' ', '_', strtolower($project->title)))]) }}">
               
                <li class="portfolio-projects-project" 
                    style="background-image: url('{{ $project->thumbnail }}')">
                    
                    <h2 class="portfolio-projects-project_title"> {{ $project->title }} </h2>
                </li>
            </a>
        
        @endforeach
        </ul>
    </section>
    
@endsection

{{-- @include('partial.index', ['items' => $model->items])

@include('partial.subindex', ['items' => $model->items]) --}}



