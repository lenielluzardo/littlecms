@extends('layouts.master')
@section('content')

<section class="section-container">

    <!-- <h2 class="section-title">Most Recent Post:</h2> -->
    <hr class="section-separator">

    <article class="p_container">
      <section id="p_header">

        <h2 id="p_title">
          {{$post['title']}}
        </h2>

        <div id="p_meta">

          <h3 id="p_author">Author: Leniel Luzardo</h3>

          <h4 id="p_date">December 20th, 2020</h4>

          <div id="p_rating">
            <span class="fas fa-star"></span>
            <span class="fas fa-star"></span>
            <span class="fas fa-star"></span>
            <span class="fas fa-star"></span>
            <span class="fas fa-star"></span>
          </div>

          <div id="p_tags">
            <span class="tag"><a href="">.NET Core</a></span>
            <span class="tag"><a href="">.NET Core</a></span>
            <span class="tag"><a href="">Software Development</a></span>
          </div>

        </div>

      </section>

      <section class="p_body">

        <div class="p_img-container">
          <img id="p_img" src="https://via.placeholder.com/500x400" alt="publication_img">
        </div>

        <div class="p_paragraphs">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos!
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos!
            Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos!
          </p>
        </div>

        <div class="p_img-container">
          <img id="p_img" src="https://via.placeholder.com/500x400" alt="publication_img">
        </div>

        <div class="p_paragraphs">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos!
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos!
            Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. A voluptates tenetur quibusdam explicabo nobis
            eum aperiam impedit, libero architecto consequuntur
            laborum dolor nam autem. Ullam cumque quas ipsam
            facilis eos!
          </p>
        </div>
      </section>
    </article>
    <hr class="section-separator">
    <!--  ==================== R A T I N G   A N D   A B O U T   A U T H O R  ====================== -->
    <section class="about_post-container section-container" >
      <div class="rating-container">
        <h3 class="section-title">Rate this post</h3>
        <div class="star-widget">
          <input type="radio" name="rate" id="rate-5">
          <label for="rate-5" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-4">
          <label for="rate-4" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-3">
          <label for="rate-3" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-2">
          <label for="rate-2" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-1">
          <label for="rate-1" class="fas fa-star"></label>
        </div>
      </div>

      <div class="about_author-container">

        <div class="author_img-container">
          <img class="author_img" src="https://via.placeholder.com/150" alt="author">
        </div>

        <div class="about_author">
          <h3 class="section-title">About the author</h3>
            <p class="p_paragraphs">
              Lorem ipsum dolor sit amet consectetur adipisicing
              elit. A voluptates tenetur quibusdam explicabo nobis
              eum aperiam impedit, libero architecto consequuntur
              laborum dolor nam autem. Ullam cumque quas ipsam
              facilis eos! Lorem ipsum dolor sit amet consectetur adipisicing
              elit. A voluptates tenetur quibusdam explicabo nobis
              eum aperiam impedit, libero architecto consequuntur
              laborum dolor nam autem. Ullam cumque quas ipsam
              facilis eos!
            </p>
        </div>

      </div>


    </section>

  </section>

  @include('blog.related')
  @endsection
