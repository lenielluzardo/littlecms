<section class="section-container related">

    <h2 class="section_title">Related Projects:</h2>
    <hr class="section-separator">

    <ul class="related-list">

        @foreach($relateds as $project)

        <li>
            <article class="related-item">
                <h3 class="related-title">{{ $project->title }} </h3>
                <img class="related-img" src="{{ $project->image1}}" alt="post_image">
            </article>
        </li>

        @endforeach

    </ul>

</section>

<hr class="section-separator">
