    <!-- ===== F O R M ===== -->
    @if($notification = Session::get('success'))
        <div >
            <strong>{{$notification}}</strong>
        </div>
    @endif

    
      <form class="contact"  method="POST" action="{{ route('web.contact.email.post') }}">

        <div class="form-group">
            <label for="fullname">Fullname</label>
            <input id="fullname" name="fullname" type="text">

            @include('web.partial.error', ['field' => 'fullname'])
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" type="text">
            
            @include('web.partial.error', ['field' => 'email'])
        </div>


        <div class="select-form-group">
            <div class="form-group">
                <label for="subject">Subject</label>
                <select id="subject" type="select" name="subject">

                <option value="">- - Please Select - -</option>
                <option value="Job Proposal">Job Proposal</option>
                <option value="Request a Commission">Request a Commission</option>
                <option value="Make a Collaboration">Make a Collaboration</option>

                </select>

                @include('web.partial.error', ['field' => 'subject'])
            </div>

            <div class="form-group">
                <label for="discipline">Discipline</label>
                <select id="discipline" type="select" name="discipline">

                <option value="">- - Please Select - -</option>
                <option value="Software / Game Development">Software / Game Development</option>
                <option value="Animation">Animation</option>
                <option value="Illustration / Concept Art">Illustration / Concept Art</option>
                <option value="UI / UX Desing">UI / UX Desing</option>

                </select>

                @include('web.partial.error', ['field' => 'discipline'])
            </div>
        </div>


        <div class="form-group">
            <textarea class="comments" name="comments" value="" placeholder="Leave a datailed message please..."></textarea>

            @include('web.partial.error', ['field' => 'comments'])
        </div>

        {{-- <input id="news" class="f_chk" type="checkbox" name="newsletter" value="on" checked="true">
        <label for="news">Subscribe to newsletter</label> <br> --}}

        <div class="form-group recaptcha-container">
            {!! NoCaptcha::display()!!}
            
            @include('web.partial.error', ['field' => 'g-recaptcha-response'])
        </div>

        <div class="form-group">
            {{ csrf_field() }}
            <button id="form-button" class="box-button" value="" type="submit" name="form-button" >
                Send
            </button>
        </div>

      </form>
    {!! NoCaptcha::renderJs()!!}

