<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->

<!--                                S I T E   H E A D E R                                          -->

<!-- --# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #-- -->
<header id="header-container">

  <!-- ====================== L O G O T Y P E   &   N A V   I C O N ====================== -->
  <div id="header-mobile">
    <a id="homepage-link" href="{{ route('welcome')}}">
     <div id="logotype-container">
        <img id="logo-icon" src="{{URL::to('./assets/logo.svg')}}" alt="logo">
        <h1 id="logo-type">{{env('APP_NAME')}}</h1>
     </div>
    </a>
    <img id="nav-icon" src="./assets/nav-icon.svg" alt="navigation">
  </div>




<!-- ====================== N A V I G A T I O N   M E N U ====================== -->
    <nav id="nav-menu" class="hidden">
      <div id="nav-menu-mobile" >
        <nav id="nav-components">
            <ul>
                @foreach($sections as $section)
                    @if($section->category === 'web' && $section->route != 'portfolio')
                    <a class="nav-component-link" href="{{ route($section->route)}}">
                        <li class="nav-component">{{$section->name}}</li>
                    </a>
                    @endif
                    @if($section->category === 'web' && $section->route === 'portfolio')
                    <a class="nav-component-link" href="{{ route($section->route, strtolower($section->name))}}">
                        <li class="nav-component">{{$section->name}}</li>
                    </a>
                    @endif
                @endforeach
          </ul>
        </nav>

        <nav id="nav-social">
           <ul>
                @foreach($sections as $section)
                @if($section->category === 'social')
                    <li class="nav-item" ><a target="_blank" href="{{$section->url}}">{{$section->name}}</a></li>
                @endif
                @endforeach
            </ul>
        </nav>
        @include('partials.navlogin')
     </div>
    </nav>
</header>
