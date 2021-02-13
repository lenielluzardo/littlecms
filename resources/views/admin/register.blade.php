@extends('layouts.master')

@section('content')

<section class="section-container">

    @if(Session::has('fail'))
        <div>
            {{Session::get('fail')}}
         </div>
    @endif

    <div class="form-container">
      <form class="ll_form" action="{{ route('register')}}" method="post">

        <label class="f_lbl" for="name">Name</label>
        <input class="f_field" id="name" name="name" type="text" value="{{old('name')}}">

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


        <label class="f_lbl" for="about1">Tell About Yourself</label>
        <textarea class="comments" id="about1" name="about1" placeholder="Tell something about yourself..." value="{{old('about1')}}"></textarea>
              @error('about1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label class="f_lbl" for="about2">A Little Bit More</label>
        <textarea class="comments" id="about2" name="about2" placeholder="Tell something about yourself..." value="{{old('about2')}}"></textarea>
              @error('about2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label class="f_lbl" for="url1">Profile Image Url</label>
        <input class="f_field" id="url1" name="url1" type="text" value="{{old('url1')}}">

        @error('url1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label class="f_lbl" for="url2">Secondary Image Url</label>
        <input class="f_field" id="url2" name="url2" type="text" value="{{old('url2')}}">

        @error('url2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


        <label class="f_lbl" for="nickname">Choose A Cool Nickname</label>
        <input class="f_field" id="nickname" name="nickname" type="text" value="{{old('nickname')}}">

        @error('nickname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label class="f_lbl" for="email">Email</label>
        <input class="f_field" id="email" name="email" type="text" value="{{old('email')}}">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label class="f_lbl" for="recovery">Recovery Email</label>
        <input class="f_field" id="recovery" name="recovery" type="text" value="{{old('recovery')}}">

        @error('recovery')
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

        <label class="f_lbl" for="confirmed">Confirm Password</label>
        <input class="f_field" id="password_confirm" name="password_confirmation" type="password" >

        @error('confirmed')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror

        <input id="not_a_robot" class="f_chk" type="checkbox" name="is_human" value="on">
        <label for="not_a_robot" > I'm not a robot</label> <br>

        <div class="submit-container">
            {{ csrf_field() }}
          <input type="submit" name="f_button" id="f_button" class="button" value="Login">
        </div>

      </form>
    </div>

  </section>
    @endsection
