<section class="section-container">

    <h2 class="section-title">Most Recent Project:</h2>

    <hr class="section-separator">

    <article class="p_container">
       <section id="p_header">
           <h2 id="p_title">{{ $project->title }}</h2>
           <div id="p_meta">
               <h3 id="p_author">Author: {{ $project->user->nickname }}</h3>
               <h4 id="p_date">Date: {{ $project->created_at }}</h4>
               <div id="p_rating">
                   @for($i = 0; $i < 5; $i++)
                     @if($i < $project->rating )
                         <span class="fas fa-star rate"></span>
                     @else
                         <span class="fas fa-star"></span>
                     @endif
                     @endfor
               </div>
               <div id="p_tags">
                    <span class="tag"><a href="">{{ $project->tag->name }}</a></span>
               </div>
           </div>
       </section>
       <section class="p_body mr">
           <div class="p_img-container">
               <img src="{{ $project->image1 }}" alt="publication_img">
             </div>
           <div id="p_description">
               <p>{{ $project->description }}</p>
                 <div class="button-container">
                     <a href="{{route('project', ['section' => $project->tag->name, 'id' => "$project->id"])}}" type="button" class="button">¡Check it!</a>
                 </div>
           </div>
       </section>
    </article>

</section>
