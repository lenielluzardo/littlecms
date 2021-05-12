<!-- ===== A R T I C L E : {{ $item->id }} ===== -->
<article id="entry-{{$item->id}}" class="entry">

    <!-- ===== H E A D E R ===== -->
    <header class="entry-header" >

        <h2>{{$item->title}}</h2>

        <div class="entry-img-container">
            <img src="{{$item->preview_img}}"  alt="{{$item->title}}">
        </div>

        <div class="entry-meta-container">
            {{-- <em>By:</em> {{$item->user->nickname}}</p> --}}
            <em>Date:</em> <time class="entry-time">{{date('d-m-Y', strtotime($item->created_at))}}</time>
        </div>

    </header>

    <!-- ===== C O N T E N T ===== -->
    <section class="entry-content">
       {!! $item->content !!}
    </section>

    <!-- ===== F O O T E R ===== -->
    <footer class="entry-footer">

    </footer>

</article>

{{-- <div class="box-item-tags-container">
    @foreach($item->tags as $tag)
        <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>
    @endforeach
</div> --}}

