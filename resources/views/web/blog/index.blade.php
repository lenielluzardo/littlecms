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

    <!-- ===== B L O G ===== -->
    <section class="blog section">

        @foreach ($viewModel->model as $category)
        <section class="blog-category">
          
            <a href="{{ route("web.blog.category", ['category' => urlencode($category->name)]) }}">
          
                <header class="blog-category_header section_header"
                        style="background-image: url('{{ $category->thumbnail }}');">
                
                    <div class="blog-category_header-icon section_header-icon" >
                        <i class="{{ $category->icon }}"></i>
                    </div>

                    <h3 class="blog-category_header-name section_header-name">
                        {{ ucfirst($category->name) }}
                    </h3>  
                    
                </header>
            </a>
            
            <section class="blog-category_body">
                <ul class="blog-category_body-articles">

                    @foreach ($category->entries as $article)

                    @php
                        $categoryName = urlencode(strtolower($category->name));
                        $articleName = urlencode(str_replace(' ', '_', strtolower($article->title)));
                    @endphp

                    <a href="{{ route('web.blog.entry', ['category' => $categoryName, 'entry' => $articleName ]) }}">

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

