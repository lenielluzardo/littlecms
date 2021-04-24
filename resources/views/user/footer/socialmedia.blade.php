<nav id="socialmedia" class="socialmedia-container" >
    <div>
        <h4>CONNECT WITH ME ON:</h3>
    </div>
    <section id="socialmedia-links" class="socialmedia-links-container">
        @foreach ($sections as $section)
            @if ($section->category === 'social')
                <a class="social-media-link" target="_blank" href="{{ $section->url }}">
                    {{ $section->name }}
                </a>
            @endif
        @endforeach
    </section>
</nav>
