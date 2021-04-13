@extends('partial.main')

@section('content')

@include('partial.errors')

{!! NoCaptcha::renderJs()!!}

<section class="section-container">
@if($notification = Session::get('success'))
    <div >
        <strong>{{$notification}}</strong>
    </div>
@endif

{{-- @if ($errors->has('g-recaptcha-response'))
    <span class="help-block">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </span>
@endif --}}

    <div class="form-container">
      <form class="form" action="{{route('contact.send')}}" method="post">

        <div class="form-group">
            <label class="form-label" for="fullname">Fullname</label>
            <input class="form-input" id="fullname" name="fullname" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input class="form-input" id="email" name="email" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="subject">Subject</label>
            <select class="form-input" id="subject" type="select" name="subject">

              <option value="">- - Please Select - -</option>
              <option value="Job Proposal">Job Proposal</option>
              <option value="Request a Commission">Request a Commission</option>
              <option value="Make a Collaboration">Make a Collaboration</option>

            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="discipline">Discipline</label>
            <select class="form-input" id="discipline" type="select" name="discipline">

              <option value="">- - Please Select - -</option>
              <option value="Software / Game Development">Software / Game Development</option>
              <option value="Animation">Animation</option>
              <option value="Illustration / Concept Art">Illustration / Concept Art</option>
              <option value="UI / UX Desing">UI / UX Desing</option>

            </select>
        </div>

        <div class="form-group">
            <textarea class="comments" name="comments" value="" placeholder="Leave a datailed message please..."></textarea>
        </div>

        {{-- <input id="news" class="f_chk" type="checkbox" name="newsletter" value="on" checked="true">
        <label for="news">Subscribe to newsletter</label> <br> --}}

        <div class="form-group">
            {!! NoCaptcha::display()!!}
        </div>

        <div class="button-container">
            {{ csrf_field() }}
            <input id="form-button" class="button" value="Send" type="submit" name="form-button" >
        </div>

      </form>
    </div>

  </section>
    @endsection
