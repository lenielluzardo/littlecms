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

{{-- {{dd($viewModel->model)}} --}}
@section('module')
<section class="category">
          
    <a href="{{ route("web.blog.category", ['category' => urlencode($viewModel->model->name)]) }}">
  
        <header class="category_header section_header"
                style="background-image: url('{{ $viewModel->model->thumbnail }}');">
        
            <div class="category_header-icon section_header-icon" >
                <i class="{{ $viewModel->model->icon }}"></i>
            </div>

            <h3 class="category_header-name section_header-name">
                {{ ucfirst($viewModel->model->name) }}
            </h3>  
            
        </header>
    </a>
    
    <section class="category_body">
        <ul class="category_body-articles">

            @foreach ($viewModel->model->entries as $article)

            @php
                $categoryName = urlencode(strtolower($viewModel->model->name));
                $articleName = urlencode(str_replace(' ', '_', strtolower($article->title)));
            @endphp

            <a href="{{ route('web.blog.entry', ['category' => $categoryName, 'entry' => $articleName ]) }}">

                <li class="category_body-articles-article card">
                    
                    <img class="category_body-articles-article_image" 
                    src="{{ $article->thumbnail }}" alt="{{ $article->title.' Image' }}"/>
                    
                    <h4 class="category_body-articles-article_title" >
                        {{ $article->title }}
                    </h4>

                </li>
            </a>
            @endforeach

        </ul>
    </section>

</section>

@endsection