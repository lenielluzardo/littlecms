@extends('web.layout')

@section('title') <?php print("$viewModel->title") ?> @endsection

@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{$viewModel->path }} </h2>
    </div>
@endsection

@section('module')

    <!-- ===== B L O G ===== -->
    <section class="blog">

        @foreach ($viewModel->model as $category)
        <h3> {{ $category->name }} </h3>
        <ul class="blog_category">
            @foreach ($category->entries as $entry)
                
            <li class="blog_category-article">
                <img class="blog_category-article_image" src="{{$entry->thumbnail}}" alt="">
                <h2 class="blog_category-article_title" >{{ $entry->title }}</h2>
            </li>

            @endforeach
        </ul>
        @endforeach

    </section>
        



@endsection

@section('scripts')
    <script src="{{asset('/js/app.js')}}"></script>
<script>
        function showArticle(id){

            let $entry = $('#entry-'+id);
            let $display = $entry.css('display');

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

