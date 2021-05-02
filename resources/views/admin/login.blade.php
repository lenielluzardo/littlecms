@extends('partial.main')

@section('content')
<section class="publication-section-container">
    <section class="content-section-container">
        <section class="publication-container">

            @if (Session::has('fail'))
                <div>
                    {{ Session::get('fail') }}
                </div>
            @endif

            <div class="form-container">
                <form class="form" action="{{ url('/login') }}" method="post">

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input id="email" class="form-input"  name="email" type="text" value="{{ old('email') }}">
                    <div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input id="password" class="form-input" name="password" type="password">
                    </div>

                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <input id="remember" class="form-check" type="checkbox" name="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-label" for="remember">Remember me</label>
                    </div>

                    <div class="form-group">
                        {!! NoCaptcha::display()!!}
                    </div>

                    <div class="button-container">
                        {{ csrf_field() }}
                        <input id="form-button" class="button" value="Login" type="submit" name="form-button" >
                    </div>

                    @if (Route::has('password.request'))
                        <a class="forgot-pass" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </form>
            </div>
        </section>
    </section>
</section>
@endsection
