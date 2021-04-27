<section class="sub-content-container">

    <h2 class="section-title">Most Recent Post:</h2>

    <article class="box-item box-container">

        <div class="box-item-title-container">
            <h2>{{$latest->title}}</h2>
        </div>

        <section class="box-item-img-container">
            <img src="{{$latest->image1}}" alt="{{$latest->title}}">
        </section>


        <div class="box-item-meta-container">

            <p class="box-item-author">By: {{$latest->user->nickname}}</p>
            <p class="box-item-date">{{$latest->created_at}}</p>

            <div class="box-item-rating-container rate-container">

                @for($i = 0; $i < 5; $i++)
                    @if($i < $latest->rating)
                        <span class="fas fa-star rate"></span>
                    @else
                        <span class="fas fa-star"></span>
                    @endif
                @endfor

            </div>

            <div class="box-item-tags-container">
                @foreach($latest->tags as $tag)
                    <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>

                @endforeach
            </div>

        </div>

        <section class="box-item-content-container">
            <p>{{$latest->paragraph1}}</p>
        </section>

        <div class="box-button-container">
            <a class="box-button" href="{{route('post', ['id' => $latest->id])}}"><div>READ THIS POST</div></a>
        </div>

    </article>

</section>
