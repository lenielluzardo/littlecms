<nav class="socialmedia" >
    <h4 class="socialmedia-title">Socialmedia:</h3>
    
    <ul class="socialmedia_links">
        @foreach ($links as $link)
        
        <li>
            <a target="_blank" href="{{ $link->url }}">
               
               <i class="socialmedia_links-icon
                        fab fa-{{ strtolower($link->name) }}"></i>
            </a>
        </li>
            
        @endforeach
    </ul>
</nav>
