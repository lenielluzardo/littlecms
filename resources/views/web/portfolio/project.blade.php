@extends('web.layout')

@section('title') 
    @php
        $title = ucfirst($viewModel->viewModule).' > '.$viewModel->model->title; 
        print("$title")
    @endphp 
@endsection

@section('path')
    <li>
        <a href="{{ route( "web.$viewModel->viewModule.index") }}">
            {{ ucfirst($viewModel->viewModule) }} 
        </a> / 
    </li>
    <li>
        @php
            $categoryName = $viewModel->model->category;
        @endphp
        <a href="{{ route("web.$viewModel->viewModule.category", ['category' => $categoryName ]) }}">
            {{ $categoryName }}
        </a> /
    </li>
    <li>
        {{ $viewModel->model->title }}
    </li>
@endsection


@section('module')
    <!-- ===== S U B C O N T E N T ===== -->
    <section class="">
        <article class="project">

            <header class="project_header">
                <div class="project_header-hero"
                     style="background-image: url('{{ $viewModel->model->thumbnail }}');">
                         
                    <h2 class="project_header-hero_title" > {{$viewModel->model->title}} </h2>

                </div>
                <div class="porject_header-meta">
                   
                    <h5 class="publication-date"> {{$viewModel->model->author}} </h2>
                    <h5 class="publication-date"> {{$viewModel->model->published_at}} </h2>

                </div>
            </header>

            <section class="box-item-content-container single-entry-content">
                {!! $viewModel->model->content !!}

            </section>

            <footer>

            </footer>

        </article>
    </section>

@endsection
