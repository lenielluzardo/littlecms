<section class="section-container">

    <h2 class="section-title">Most Recent Post:</h2>

    <hr class="section-separator">

    <article class="publication-container">
       <section class="publication-header">
           <h2 class="publication-title">{{$latest->title}}</h2>
           <div class="publication-meta">
               <h3 class="publication-author">Author: {{$latest->user->nickname}}</h3>
               <h4 class="publication-date">Date: {{$latest->created_at}}</h4>
               <div class="publication-rating">
                   @for($i = 0; $i < 5; $i++)
                     @if($i < $latest->rating)
                         <span class="fas fa-star rate"></span>
                     @else
                         <span class="fas fa-star"></span>
                     @endif
                     @endfor
               </div>
               <div class="tags-container">
                   @foreach($latest->tags as $tag)
                        <a class="tag" style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a>
                     @endforeach
               </div>
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
                <a href="{{route('post', ['id' => $latest->id])}}" type="button" class="button">¡Read it!</a>
            </div>

       </section>
    </article>

</section>
