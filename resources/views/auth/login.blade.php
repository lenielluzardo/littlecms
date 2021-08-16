@section('title', 'Login')

@extends('web.layout')

@section('module')

    <!-- ===== M A I N ===== -->
    <main id="main" class="main-center">

        {{-- @if (Session::has('fail'))

            <div> {{ Session::get('fail') }} </div>

        @endif --}}

        <!-- ===== L O G I N ===== -->
        <div class="form-container">

            <form class="login" action="{{ route( 'login') }}" method="POST">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" value="{{ old('email') }}">
                <div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password">
                </div>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                {{-- <div class="form-group">
                    <input id="remember" class="form-check" type="checkbox" name="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Remember me</label>
                </div> --}}

                {{-- <div class="form-group">
                    {!! NoCaptcha::display()!!}
                </div> --}}

                <div class="form-group">
                    {{ csrf_field() }}
                    <button id="form-button" class="button" value="Login" type="submit" name="form-button" >
                        Login
                    </button>
                </div>

                {{-- <div class="form-group">
                    @if (Route::has('password.request'))
                        <a class="forgot-pass" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div> --}}

            </form>

        </div>

    </main>

@endsection
