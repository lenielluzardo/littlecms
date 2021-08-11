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

    <!-- ===== B L O G ===== -->
    <section class="module blog">

        @foreach ($viewModel->model as $category)
        <div class="blog-category">
            <h3 class="blog-category_name"> {{ ucfirst($category->name) }} 
            <hr>
            </h3>
            
            
            <ul class="blog-category-articles">

                @foreach ($category->entries as $article)
                <a href="{{ route('web.blog.article', ['articleName' => urlencode(str_replace(' ', '_', strtolower($article->title)))]) }}">

                    <li class="blog-category-articles-article">
                        <img class="blog-category-articles-article_image" src="{{ $article->thumbnail }}" alt="{{ $article->title.' Image' }}"/>
                        <h2 class="blog-category-articles-article_title" >{{ $article->title }}</h2>
                    </li>
                </a>
                
                @endforeach
            </ul>

        </div>
        @endforeach

    </section>
        



@endsection

@section('scripts')
    <script src="{{asset('/js/app.js')}}"></script>
<script>
        function showArticle(id){

            let $article = $('#entry-'+id);
            let $display = $article.css('display');

            if($display !== 'none')
            {
                return;
            }
            $('#subindex').show();
            $('.entry').css('display', 'none');
            $('#entry-'+id).toggle('ease-in-out');
            document.title += " :: " + $('#entry-title').text();
        }
    </script>
@endsection

