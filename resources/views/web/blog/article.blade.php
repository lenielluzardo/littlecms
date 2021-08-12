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
            $categoryName = $viewModel->model->category()->first()->name;
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

    <?php $title = $viewModel->model->title ?>

    <!-- ===== S U B C O N T E N T ===== -->
    <section >

        <div class="box-container">

            <!-- ===== A R T I C L E : {{ $viewModel->model->id }} ===== -->
<article id="entry-{{$viewModel->model->id}}" class="">

    <!-- ===== H E A D E R ===== -->
    <header class="entry-header" >

        <h2 id="entry-title">{{$viewModel->model->title}}</h2>

        <div class="entry-img-container">
            <img src="{{$viewModel->model->thumbnail}}"  alt="{{$viewModel->model->title}}">
        </div>

        <div class="entry-meta-container">
            {{-- <em>By:</em> {{$viewModel->model->user->nickname}}</p> --}}
            <em>Date:</em> <time class="entry-time">{{date('d-m-Y', strtotime($viewModel->model->created_at))}}</time>
        </div>

    </header>

    <!-- ===== C O N T E N T ===== -->
    <section class="entry-content">
       {!! $viewModel->model->content !!}
    </section>

    <!-- ===== F O O T E R ===== -->
    <footer class="entry-footer">

    </footer>

</article>
        </div>

        {{-- @include('user.partial.rating') --}}

    </div>

    </section>

    {{-- @include('user.content.blog.related') --}}

@endsection

{{-- <div class="post-rate">
    @for($i = 0; $i < 5; $i++)
        @if($i < $viewModel->model->rating)
            <span class="fas fa-star rate"></span>
        @else
            <span class="fas fa-star"></span>
        @endif
    @endfor
</div> --}}

