            {{-- @if(Session::has('fail'))
                <div>
                    {{Session::get('fail')}}
                 </div>
            @endif --}}

            <div class="form-container">
              
                <form class="form registration" method="POST"
                    action="{{ route('admin.module.save', ['module' => strtolower( $viewModel->viewModule )])}}" >

                <input type="text" hidden name="id" value="{{ $viewModel->model->id }}">

                <div class="form-section">

                    <div class="form-group">
                        
                        <label class="form-label" for="name">Name</label>
                        <input class="form-input" id="name" name="name" type="text" value="{{$viewModel->model->name}}">

                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                        @enderror

                    </div>

                    <div class="form-group">
                        
                        <label class="form-label" for="description">Tell About Yourself</label>
                        <textarea class="comments" id="description" name="description" placeholder="Write about yourself." value="{{$viewModel->model->description}}"></textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                        @enderror

                    </div>

                    <div class="form-group">

                        <label class="form-label" for="thumbnail">Thumbnail</label>
                        <input class="form-input" id="thumbnail" name="thumbnail" type="text" value="{{$viewModel->model->thumbnail}}">

                        @error('thumbnail')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-input" id="username" name="username" type="text" value="{{$viewModel->model->username}}">

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>

                        <input class="form-input" id="email" name="email" type="text" value="{{$viewModel->model->email}}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="secondary_email">Recovery Email</label>
                        <input class="form-input" id="secondary_email" name="secondary_email" type="text" value="{{$viewModel->model->secondary_email}}">

                        @error('secondary_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="recovery_email">Recovery Email</label>
                        <input class="form-input" id="recovery_email" name="recovery_email" type="text" value="{{$viewModel->model->recovery_email}}">

                        @error('recovery_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <label class="form-label" for="password">Password</label>
                        <input class="form-input" id="password" name="password" type="password" value="{{$viewModel->model->password}}">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="confirmed">Confirm Password</label>
                        <input class="form-input" id="password_confirm" name="password_confirmation" type="password" value="{{$viewModel->model->password}}" >

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
