<section class="section-container">

    <h2 class="section-title">Most Recent Post:</h2>

    <hr class="section-separator">

    <article class="latest-container">
       <section id="latest-header">
           <h2 id="latest-title">{{$latest->title}}</h2>
           <div id="latest-meta">
               <h3 id="latest-author">Author: {{$latest->user->nickname}}</h3>
               <h4 id="latest-date">Date: {{$latest->created_at}}</h4>
               <div id="latest-rating">
                   @for($i = 0; $i < 5; $i++)
                     @if($i < $latest->rating)
                         <span class="fas fa-star rate"></span>
                     @else
                         <span class="fas fa-star"></span>
                     @endif
                     @endfor
               </div>
               <div id="latest-tags">
                   @foreach($latest->tags as $tag)
                        <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>
                     @endforeach
               </div>
           </div>
       </section>
       <section class="latest-body">

            <div class="latest-img-container">
               <img src="{{$latest->image1}}" alt="publication-img">
            </div>

            <div id="latest-description-container">
               <p>{{$latest->paragraph1}}</p>
            </div>

            <div class="button-container latest-button-container">
                <a href="{{route('post', ['id' => $latest->id])}}" type="button" class="button">¡Read it!</a>
            </div>

       </section>
    </article>

</section>
