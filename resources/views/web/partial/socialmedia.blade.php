<nav class="socialmedia" >

    <h4 class="socialmedia_title">Socialmedia:</h3>
    <section class="socialmedia_links">
        
        @foreach ($links as $link)
        
        <a class="socialmedia_links-link" target="_blank"
            href="{{ $link->url }}">
            
            <i class="fab fa-{{ strtolower($link->name) }}"></i>
        </a>

        @endforeach

    </section>
</nav>
