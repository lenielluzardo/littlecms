@extends('layouts.master')

@section('content')

@include('partials.errors')

<section class="section-container">

    <div class="contact_form-container">
      <form class="contact_form" action="{{route('contact')}}" method="post">

        <label class="f_lbl" for="email">Email</label>
        <input class="f_field" id="email" name="email" type="text">

        <label class="f_lbl" for="password">Password</label>
        <input class="f_field" id="password" name="password" type="text">

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
