    <h2 class="section-title">Related Posts:</h2>
    <div id="publication-card-list-container">
    <ul class="publication-card-list">

        @foreach($relateds as $post)
        <li class="publication-card-list-item">
            <article class="publication-card-container">
                <section class="related-publication-card-img-container">
                    <img class="publication-card-img" src="{{$post->image1}}"  alt="post_image">
                </section>
                <section class="publication-card-description-container">
                    <h3 class="publication-card-title">{{$post->title}}</h3>
                    <h4 class="publication-card-author">By: {{$post->user->nickname}}</h3>
                    <div class="publication-card-rating rate-container">
                        @for($i = 0; $i < 5; $i++)
                          @if($i < $post->rating)
                              <span class="fas fa-star rate"></span>
                          @else
                              <span class="fas fa-star"></span>
                          @endif
                          @endfor
                    </div>
                </section>
                <section class="publication-card-button-container">
                    <a href="{{route('post', ['id' => $post->id])}}"><div>READ</div></a>
                </section>
            </article>
        </li>
        @endforeach
    </ul>
</div>
