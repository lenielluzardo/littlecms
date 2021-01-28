@extends('layouts.master')

@section('content')

@include('partials.errors')

<section class="section-container">

    <div class="contact_form-container">
      <form class="contact_form" action="{{route('contact')}}" method="post">

        <label class="f_lbl" for="fullname">Fullname</label>
        <input class="f_field" id="fullname" name="fullname" type="text">

        <label class="f_lbl" for="email">Email</label>
        <input class="f_field" id="email" name="email" type="text">

        <label class="f_lbl" for="subject">Subject</label>
        <select class="f_field" id="subject" type="select" name="subject">

          <option value="">- - Please Select - -</option>
          <option value="Job Proposal">Job Proposal</option>
          <option value="Request a Commission">Request a Commission</option>
          <option value="Make a Collaboration">Make a Collaboration</option>

        </select>

        <label class="f_lbl" for="discipline">Discipline</label>
        <select class="f_field" id="discipline" type="select" name="discipline">

          <option value="">- - Please Select - -</option>
          <option value="Software / Game Development">Software / Game Development</option>
          <option value="Animation">Animation</option>
          <option value="Illustration / Concept Art">Illustration / Concept Art</option>
          <option value="UI / UX Desing">UI / UX Desing</option>

        </select>

        <textarea id="comments" name="comments" value="" placeholder="Leave a datailed message please..."></textarea>

        <input id="news" class="f_chk" type="checkbox" name="newsletter" value="on" checked="true">
        <label for="news">Subscribe to newsletter</label> <br>

        <input id="not_a_robot" class="f_chk" type="checkbox" name="is_human" value="on">
        <label for="not_a_robot" > I'm not a robot</label> <br>

        <div class="submit-container">
            {{ csrf_field() }}
          <input type="submit" name="f_button" id="f_button" class="button" value="¡Send!">
        </div>

      </form>
    </div>

  </section>
    @endsection
