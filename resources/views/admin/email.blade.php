@extends('layouts.master')

@section('content')

<section class="section-container">

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="form-container">
        <form class="ll_form" method="post" action="{{ route('password.email') }}">
            @csrf

            <label for="email" class="f_lbl">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="f_field" name="email" value="{{ old('email') }}">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="submit" class="button" value="Reset Password">
        </form>
    </div>
</section>
@endsection
