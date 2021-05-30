<nav id="socialmedia" class="socialmedia-container" >
    <div>
        <h4>CONNECT ON:</h3>
    </div>
    <section id="socialmedia-links" class="socialmedia-links-container">
        @foreach ($links as $link)
            {{-- @if ($link->category === 'social') --}}
                <a class="social-media-link" target="_blank" href="{{ $link->url }}">
                    {{ $link->title }}
                </a>
            {{-- @endif --}}
        @endforeach
    </section>
</nav>
