@include('partial.errors')

<div class="admin-container">
    <div class="admin-post_list-container">

    <div class="post_list-container" >

        <ul class="post_list">
            @foreach($model->items as $post)
                <li>
                    <div class="post_item-container">
                        <img class="post_item-img" src="{{$post->image1}}" alt="post_image">
                        <h3 class="post_item-title">{{$post->title}}</h3>
                        <h4 class="post_item-date">{{$post->created_at}}</h3>

                        {{-- <div id="post_item-rating">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $post->rating)
                                    <span class="fas fa-star rate"></span>
                                @else
                                    <span class="fas fa-star"></span>
                                @endif
                            @endfor
                        </div> --}}
                            <form class="post_item-remove" method="get" action="{{ route('admin.remove', $post->id ) }}">
                                <button type="submit" class="post_item-remove"><span class="trash fas fa-trash"></span></a>
                            </form>
                        </div>
                </li>
        @endforeach
        </ul>
    </div>


    </div>


</div>
