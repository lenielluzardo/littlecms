@extends('admin.layout')

@section('toolbar')

    <nav id="desktop-navigation" class="desktop-navigation">
        ENTRIES TOOL BAR
    </nav>

@endsection

@section('module')

    <section class="module-container">

        {{-- @include('partial.errors') --}}
        <section class="module">
        <ul class="post_list">
            @foreach($model as $post)
                <li >
                    <div class="post_item-container">
                        <img class="post_item-img" src="{{$post->image1}}" alt="post_image">
                        <h3 class="post_item-title">{{$post->title}}</h3>
                        <h4 class="post_item-date">{{$post->created_at}}</h3>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    @include('admin.modules.entries.edit')

@endsection
@section('scripts')
    <script src="{{asset('/js/app.js')}}"></script>
    {{-- <script>
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
        </script> --}}
    @endsection

{{-- <div id="post_item-rating">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $post->rating)
                                    <span class="fas fa-star rate"></span>
                                @else
                                    <span class="fas fa-star"></span>
                                @endif
                            @endfor
                        </div> --}}
                            {{-- <form class="post_item-remove" method="get" action="{{ route('admin.remove', $post->id ) }}"> --}}
                                {{-- <button type="submit" class="post_item-remove"><span class="trash fas fa-trash"></span></a> --}}
                            {{-- </form> --}}
