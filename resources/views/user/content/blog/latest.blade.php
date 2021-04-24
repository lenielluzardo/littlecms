    <h2 class="section-title">Most Recent Post:</h2>

    <article class="publication-card-container">

        <section class="latest-publication-card-img-container">
            <img class="publication-card-img" src="{{$latest->image1}}" alt="publication-img">
        </section>

        <section class="publication-card-description-container">
            <h2 class="publication-card-title">{{$latest->title}}</h2>
            <p class="publication-card-preview">{{$latest->paragraph1}}</p>
            <h3 class="publication-card-author">By: {{$latest->user->nickname}}</h3>
            <h5 class="publication-card-date">{{$latest->created_at}}</h4>
            <div class="publication-card-rating-container rate-container">
                @for($i = 0; $i < 5; $i++)
                  @if($i < $latest->rating)
                      <span class="fas fa-star rate"></span>
                  @else
                      <span class="fas fa-star"></span>
                  @endif
                  @endfor
            </div>
            <div class="publication-card-tags-container">
                @foreach($latest->tags as $tag)
                     <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>
                  @endforeach
            </div>
        </section>

        <section class="publication-card-button-container">
            <a href="{{route('post', ['id' => $latest->id])}}"><div>READ THIS POST</div></a>
        </section>

    </article>
