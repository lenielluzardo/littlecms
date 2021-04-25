    <h2 class="section-title">Related Posts:</h2>
    <div class="box-item-list-container">
    <ul>

        @foreach($relateds as $post)
        <li>
            <article class="box-item box-container">

                <section class="box-item-img-container">
                    <img src="{{$post->image1}}"  alt="{{$post->title}}">
                </section>

                <section class="box-item-title-container">
                    <h3>{{$post->title}}</h3>
                </section>

                <section class="box-item-meta-container">

                    <p class="box-item-author">By: {{$post->user->nickname}}</p>

                    <div class="box-item-rating rate-container">
                        @for($i = 0; $i < 5; $i++)
                          @if($i < $post->rating)
                              <span class="fas fa-star rate"></span>
                          @else
                              <span class="fas fa-star"></span>
                          @endif
                          @endfor
                    </div>

                </section>

                <section class="box-button">
                    <a href="{{route('post', ['id' => $post->id])}}">READ</a>
                </section>

            </article>
        </li>
        @endforeach
    </ul>
</div>
