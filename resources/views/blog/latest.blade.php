<section class="content-section-container">
    <h2 class="section-title">Most Recent Post:</h2>

    <article class="publication-card-container latest-publication">

        <section class="publication-card-img-container">
            <img class="publication-card-img" src="{{$latest->image1}}" alt="publication-img">
        </section>

        <section class="publication-card-description-container">
            <h2 class="publication-card-title">{{$latest->title}}</h2>
            <p>{{$latest->paragraph1}}</p>
            <h3 class="publication-card-author">Author: {{$latest->user->nickname}}</h3>
            <h4 class="publication-card-date">Date: {{$latest->created_at}}</h4>
            <div class="publication-card-rating">
                @for($i = 0; $i < 5; $i++)
                  @if($i < $latest->rating)
                      <span class="fas fa-star rate"></span>
                  @else
                      <span class="fas fa-star"></span>
                  @endif
                  @endfor
            </div>
            <div class="tags-container">
                @foreach($latest->tags as $tag)
                     <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>
                  @endforeach
            </div>
        </section>


        <section class="publication-card-button-container">
            <a href="{{route('post', ['id' => $latest->id])}}"><div>READ THIS POST</div></a>
        </section>

    </article>
</section>
