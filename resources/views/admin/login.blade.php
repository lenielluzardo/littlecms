@extends('layouts.master')

@section('content')

<section class="section-container">

    @if(Session::has('fail'))
        <div>
            {{Session::get('fail')}}
         </div>
    @endif

    <div class="form-container">
      <form class="ll_form" action="{{url('/login')}}" method="post">

        <label class="f_lbl" for="email">Email</label>
        <input class="f_field" id="email" name="email" type="text" value="{{old('email')}}">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label class="f_lbl" for="password">Password</label>
        <input class="f_field" id="password" name="password" type="password" >

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror
        <div>
            <input id="remember" class="f_chk" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <div>
            <input id="notrobot" class="f_chk" type="checkbox" name="notrobot">
            <label for="notrobot" > I'm not a robot</label> <br>
        </div>
        <div class="submit-container">
            {{ csrf_field() }}
          <input type="submit" name="f_button" id="f_button" class="button" value="Login">
        </div>

        @if (Route::has('password.request'))
        <a class="forgot-pass" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
      </form>
    </div>

  </section>
    @endsection
