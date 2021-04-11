<!-- # # # # # # # # # # # # # -->
<!--          F O O T E R      -->
<!-- v v v v v v v v v v v v v -->

<footer id="footer-section-container">
    <nav id="social-media-links" >

        @foreach ($sections as $section)
            @if ($section->category === 'social')
                <a class="social-media-link" target="_blank" href="{{ $section->url }}">
                    {{ $section->name }}
                </a>
            @endif
        @endforeach

    </nav>
    <div class="copyrights">
        <span>Leniel Luzardo &copy 2020 | <em>All rights reserved<em></span>
    </div>
</footer>



    {{-- <div class="button-container">
      <a href="{{ route('contact.index')}}" class="button">Contact me</a>
    </div> --}}
