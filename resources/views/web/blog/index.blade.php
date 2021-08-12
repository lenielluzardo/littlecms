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
        <section class="blog-category">
            
            <header class="blog-category_header"> 
                <div class="blog-category_header-icon">
                    <i class="{{ $category->icon }}"></i>
                </div>
                
                <h3 class="blog-category_header-name">{{ ucfirst($category->name) }}</h3>  
            </header>
            
            <section class="blog-category_body">
                <ul class="blog-category_body-articles">

                    @foreach ($category->entries as $article)
                    <a href="{{ route('web.blog.article', ['articleName' => urlencode(str_replace(' ', '_', strtolower($article->title)))]) }}">

                        <li class="blog-category_body-articles-article card">
                            
                            <img class="blog-category_body-articles-article_image" 
                            src="{{ $article->thumbnail }}" alt="{{ $article->title.' Image' }}"/>
                            
                            <h4 class="blog-category_body-articles-article_title" >
                                {{ $article->title }}
                            </h4>

                        </li>
                    </a>
                    @endforeach

                </ul>
            </section>

        </section>
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

