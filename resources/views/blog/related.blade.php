<section class="content-section-container">
    <h2 class="section-title">Related Posts:</h2>

    <ul class="publication-related-list">

        @foreach($relateds as $post)
        <li class="publication-related-item">
            <article class="publication-card-container related-publication">
                <section class="publication-card-img-container">
                    <img class="publication-card-img" src="{{$post->image1}}"  alt="post_image">
                </section>
                <section class="publication-card-description-container">
                    <h3 class="related-title">{{$post->title}}</h3>
                    <h3 class="publication-card-author">By: {{$post->user->nickname}}</h3>
                    <div class="publication-card-rating">
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
</section>
