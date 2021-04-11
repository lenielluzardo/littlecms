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
                </section>
            </article>
        </li>
        @endforeach

    </ul>
</section>
