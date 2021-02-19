<section class="section-container">

    <h2 class="section-title">Most Recent Project:</h2>

    <hr class="section-separator">

    <article class="publication-container">
       <section class="publication-header">
           <h2 class="publication-title">{{$latest->title}}</h2>
           <div class="publication-meta">
               <h3 class="publication-author">Author: {{$latest->user->nickname}}</h3>
               <h4 class="publication-date">Date: {{$latest->created_at}}</h4>
           </div>
       </section>
       <section id="latest-body">

            <div id="latest-img-container">
               <img src="{{$latest->image1}}" alt="publication-img">
            </div>

            <div id="latest-description-container">
               <p>{{$latest->paragraph1}}</p>
            </div>

            <div id="latest-button-container" class="button-container">
                <a href="{{route('project', ['section' => strtolower($latest->section->name), 'id' => "$latest->id"])}}" type="button" class="button">¡Check it!</a>
            </div>

       </section>
    </article>

</section>
