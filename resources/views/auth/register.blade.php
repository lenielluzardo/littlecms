@extends('user.content.main')

@section('index')
<section class="publication-section-container">
    <section class="content-section-container">
        <section class="publication-container">

            @if(Session::has('fail'))
                <div>
                    {{Session::get('fail')}}
                 </div>
            @endif

            <div class="form-container">
              <form class="form registration" action="{{ route('register')}}" method="post">

                <div class="form-section">

                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-input" id="name" name="name" type="text" value="{{old('name')}}">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="description">Tell About Yourself</label>
                        <textarea class="comments" id="description" name="description" placeholder="Tell something about yourself..." value="{{old('description')}}"></textarea>
                              @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="about">A Little Bit More</label>
                        <textarea class="comments" id="about" name="about" placeholder="Tell something about yourself..." value="{{old('about')}}"></textarea>
                              @error('about')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="img_profile">Profile Image Url</label>
                        <input class="form-input" id="img_profile" name="img_profile" type="text" value="{{old('img_profile')}}">

                        @error('img_profile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="img_profile_2">Secondary Image Url</label>
                        <input class="form-input" id="img_profile_2" name="img_profile_2" type="text" value="{{old('img_profile_2')}}">

                        @error('img_profile_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="form-section">

                    <div class="form-group">
                        <label class="form-label" for="nickname">Choose A Cool Nickname</label>
                        <input class="form-input" id="nickname" name="nickname" type="text" value="{{old('nickname')}}">

                        @error('nickname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-input" id="email" name="email" type="text" value="{{old('email')}}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="recovery">Recovery Email</label>
                        <input class="form-input" id="recovery" name="recovery" type="text" value="{{old('recovery')}}">

                        @error('recovery')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <label class="form-label" for="password">Password</label>
                        <input class="form-input" id="password" name="password" type="password" >

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="confirmed">Confirm Password</label>
                        <input class="form-input" id="password_confirm" name="password_confirmation" type="password" >

                        @error('confirmed')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                     <div class="form-group">
                        {!! NoCaptcha::display()!!}
                    </div>

                    <div class="button-container">
                        {{ csrf_field() }}
                      <input type="submit" name="f_button" id="f_button" class="button" value="Register">
                    </div>

                </div>
              </form>
            </div>

        </section>
    </section>
</section>
@endsection
