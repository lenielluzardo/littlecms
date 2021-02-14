@extends('layouts.master')

@section('content')
<section class="section-container">
   <div class="form-container">
       <form class="ll_form "method="POST" action="{{ route('password.update') }}">
           @csrf

           <input type="hidden" name="token" value="{{ $token }}">

           <label for="email" class="f_lbl">{{ __('E-Mail Address') }}</label>
           <input id="email" type="email" class="f_field" name="email" value="{{ $email ?? old('email') }}" >

           @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror

           <label for="password" class="f_lbl">{{ __('Password') }}</label>
           <input id="password" type="password" class="f_field" name="password" >

           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror

           <label for="password-confirm" class="f_lbl">{{ __('Confirm Password') }}</label>
           <input id="password-confirm" type="password" class="f_field" name="password_confirmation" >

           <input type="submit" class="button" value="Reset Password">
       </form>
   </div>
</section>
@endsection
