<nav id="socialmedia" class="socialmedia-container" >
    <div>
        <h4>CONNECT ON:</h3>
    </div>
    <section id="socialmedia-links" class="socialmedia-links-container">
        @foreach ($links as $link)
                <a class="social-media-link" target="_blank" href="{{ $link->url }}">
                    {{ $link->name }}
                </a>
        @endforeach
    </section>
</nav>
