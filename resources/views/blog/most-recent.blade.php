<section class="section-container">

    <h2 class="section-title">Most Recent Post:</h2>

    <hr class="section-separator">

    <article class="p_container">
       <section id="p_header">
           <h2 id="p_title">{{$post->title}}</h2>
           <div id="p_meta">
               <h3 id="p_author">Author: {{$post->user->nickname}}</h3>
               <h4 id="p_date">Date: {{$post->created_at}}</h4>
               <div id="p_rating">
                   @for($i = 0; $i < 5; $i++)
                     @if($i < $post->rating)
                         <span class="fas fa-star rate"></span>
                     @else
                         <span class="fas fa-star"></span>
                     @endif
                     @endfor
               </div>
               <div id="p_tags">
                   @foreach($post->tags as $tag)
                         <span class="tag"><a style="background-color:{{$tag->color}};" href="">{{$tag->name}}</a></span>
                     @endforeach
               </div>
           </div>
       </section>
       <section class="p_body mr">
           <div class="p_img-container">
               <img src="{{$post->image1}}" alt="publication_img">
             </div>
           <div id="p_description">
               <p>{{$post->paragraph1}}</p>
                 <div class="button-container">
                     <a href="{{route('post', ['id' => $post->id])}}" type="button" class="button">¡Read it!</a>
                 </div>
           </div>
       </section>
    </article>

</section>
