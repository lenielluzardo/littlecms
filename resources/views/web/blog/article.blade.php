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
    <section >
        <article class="article">
            <!-- ===== H E A D E R ===== -->
            <header class="article_header" >

                <h2 class="article_header-title">
                    {{$viewModel->model->title}}
                </h2>

                <div class="article_header-meta">
                    <h5>
                        By:
                        {{$viewModel->model->author}}
                    </h5>
                <h5>
                    On:
                    <time class="article_header-meta_date">
                        {{ $viewModel->model->published_at }}
                        </time>
                    </h4> 
                </div>
                
                <img class="article_header-thumbnail" 
                    src="{{$viewModel->model->thumbnail}}"  
                    alt="{{$viewModel->model->title}}" />

            </header>

            <!-- ===== C O N T E N T ===== -->
            <section class="article_body">
                {!! $viewModel->model->content !!}
            </section>

            <!-- ===== F O O T E R ===== -->
            <footer class="article_footer">

            </footer>

        </article>
    </section>
@endsection

{{-- @include('user.partial.rating') --}}
    {{-- @include('user.content.blog.related') --}}


{{-- <div class="post-rate">
    @for($i = 0; $i < 5; $i++)
        @if($i < $viewModel->model->rating)
            <span class="fas fa-star rate"></span>
        @else
            <span class="fas fa-star"></span>
        @endif
    @endfor
</div> --}}

