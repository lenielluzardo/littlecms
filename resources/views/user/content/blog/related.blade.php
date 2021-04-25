<section class="sub-content-container">

    <h2 class="section-title">Related Posts:</h2>

    <div class="box-list-container post-list-container">

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

                    <section class="box-button">
                        <a href="{{route('post', ['id' => $post->id])}}">READ</a>
                    </section>

                </article>
            </li>

            @endforeach
        </ul>

    </div>
</section>
