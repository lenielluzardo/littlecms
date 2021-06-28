            {{-- @if(Session::has('fail'))
                <div>
                    {{Session::get('fail')}}
                 </div>
            @endif --}}

            <div class="form-container">
              <form class="form registration" action="{{ route('user.post')}}" method="post">

                <div class="form-section">

                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-input" id="name" name="name" type="text" value="{{$user->name}}">
                        {{-- <input class="form-input" id="name" name="name" type="text" value="{{old('name')}}"> --}}

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="description">Tell About Yourself</label>
                        <textarea class="comments" id="description" name="description" placeholder="Write about yourself." value="{{$user->description}}"></textarea>
                        {{-- <textarea class="comments" id="description" name="description" placeholder="Tell something about yourself..." value="{{old('description')}}"></textarea> --}}
                              @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="about">A Little Bit More</label>
                        <textarea class="comments" id="about" name="about" placeholder="Tell something about yourself..." value="{{$user->about}}"></textarea>
                        {{-- <textarea class="comments" id="about" name="about" placeholder="Tell something about yourself..." value="{{old('about')}}"></textarea> --}}
                              @error('about')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="profile_img">Profile Image Url</label>
                        <input class="form-input" id="profile_img" name="profile_img" type="text" value="{{$user->profile_img}}">

                        @error('profile_img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label class="form-label" for="profile_img_2">Secondary Image Url</label>
                        <input class="form-input" id="profile_img_2" name="profile_img_2" type="text" value="{{old('profile_img_2')}}">

                        @error('profile_img_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label class="form-label" for="nickname">Choose A Cool Nickname</label>
                        <input class="form-input" id="nickname" name="nickname" type="text" value="{{$user->nickname}}">

                        @error('nickname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>

                        <input class="form-input" id="email" name="email" type="text" value="{{$user->email}}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="recovery_email">Recovery Email</label>
                        <input class="form-input" id="recovery_email" name="recovery_email" type="text" value="{{$user->recovery_email}}">

                        @error('recovery_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <label class="form-label" for="password">Password</label>
                        <input class="form-input" id="password" name="password" type="password" value="{{$user->password}}">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="confirmed">Confirm Password</label>
                        <input class="form-input" id="password_confirm" name="password_confirmation" type="password" value="{{$user->password}}" >

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
                      <input type="submit" name="f_button" id="f_button" class="button" value="Save">
                    </div>

                </div>
              </form>
            </div>

        </section>
    </section>
</section>
{{-- @endsection --}}
