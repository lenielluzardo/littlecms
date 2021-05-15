<section id="session" class="session-container">
    @guest
    @if (Route::has('login'))
        <li class="admin-nav-item">
            <a class="admin-nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

@else
    <li class="admin-nav-item">
        <a class="admin-nav-link" href="#">
            {{ Auth::user()->nickname }}
        </a>

        <div class="admin-nav-item-container">
            <a class="admin-nav-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
@endguest
</section>
