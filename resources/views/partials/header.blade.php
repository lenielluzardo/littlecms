<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->

<!--                                S I T E   H E A D E R                                          -->

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->
<header id="header-container">

  <!-- ====================== L O G O T Y P E   &   N A V   I C O N ====================== -->
  <div id="header-mobile">
    <a id="homepage-link" href="{{ route('welcome')}}">
     <div id="logotype-container">
        <img id="logo-icon" src="{{URL::to('./assets/logo.svg')}}" alt="logo">
        <h1 id="logo-type">Leniel Luzardo</h1>
     </div>
    </a>
    <img id="nav-icon" src="./assets/nav-icon.svg" alt="navigation">
  </div>


  @include('partials.login')

<!-- ====================== N A V I G A T I O N   M E N U ====================== -->
    <nav id="nav-menu" class="hidden">
      <div id="nav-menu-mobile" >
        <nav id="nav-components">
           <ul>
            <a class="" href="{{ route('blog')}}">
                <li class="nav-component">Blog</li>
            </a>
            <a class="" href="{{ route('portfolio.section', ['section' => 'Animation'])}}">
                <li class="nav-component">Animation</li>
            </a>
            <a class="" href="{{ route('portfolio.section', ['section' => 'Illustration'])}}">
                <li class="nav-component">Illustration</li>
            </a>
            <a class="" href="{{ route('portfolio.section', ['section' => 'Software'])}}">
                <li class="nav-component">Software Development</li>
            </a>
            <a class="" href="{{ route('weird-stuff')}}">
                <li class="nav-component">Weird Stuff</li>
            </a>
            <a class="" href="{{ route('contact.index')}}">
                <li class="nav-component">Contact</li>
            </a>
          </ul>
        </nav>

        <nav id="nav-social">
           <ul>
             <li class="nav-item" ><a target="_blank" href="https://www.linkedin.com/in/lenielluzardo/">LinkedIn</a></li>
             <li class="nav-item" ><a target="_blank" href="https://www.behance.net/lenielluzardo">Behance</a></li>
             <li class="nav-item" ><a target="_blank" href="https://github.com/lenielluzardo">GitHub</a></li>
             <li class="nav-item" ><a target="_blank" href="">Yotube</a></li>
             <li class="nav-item" ><a target="_blank" href="https://www.instagram.com/lenielluzardo/">Instagram</a></li>
             <li class="nav-item" ><a target="_blank" href="https://twitter.com/LenielLuzardo">Twitter</a></li>
           </ul>
        </nav>
     </div>
    </nav>
</header>
