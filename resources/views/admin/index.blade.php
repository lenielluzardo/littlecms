@extends('layouts.master')

@section('content')

@include('partials.errors')

<div class="admin-container">
    <div class="admin-post_list-container">

      <div class="post_list-container" >

        <ul class="post_list">
            @foreach($posts as $post)
                <li>
                    <div class="post_item-container">
                        <img class="post_item-img" src="https://via.placeholder.com/80" alt="post_image">
                        <h3 class="post_item-title">{{$post->title}}</h3>
                        <h4 class="post_item-date">{{$post->created_at}}</h3>

                        <div id="post_item-rating">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $post->rating)
                                    <span class="fas fa-star rate"></span>
                                 @else
                                    <span class="fas fa-star"></span>
                                @endif
                             @endfor
                        </div>
                        <button class="post_item-remove"><span class="trash fas fa-trash"></span></button>
                    </div>
                </li>
           @endforeach
        </ul>

      </div>


    </div>
    <div class="new_post-container">
      <button class="new_button button">New Post</button>
    </div>

    <div class="post_detail-container">
      <form class="post_form" action="{{route('admin.save')}}" method="post">

         <label class="f_lbl" for="post_title">Post Title</label>
         <input class="p_field" id="post_title" name="title" type="text" >

         <label class="f_lbl" for="post_img1">Post Image Url</label>
         <input class="p_field" id="post_img1" name="image1" type="text">

         <textarea class="p_field" id="post_p1" name="paragraph1" value="" placeholder="Paragraph 1"></textarea>

         <label class="f_lbl" for="post_img2">Post Image Url</label>
         <input class="p_field" id="post_img2" name="image2" type="text">

         <textarea class="p_field" id="post_p2" name="paragraph2" value="" placeholder="Paragraph 2"></textarea>

         <label class="f_lbl" for="post_img3">Post Image Url</label>
         <input class="p_field" id="post_img3" name="image3" type="text">

         <textarea class="p_field" id="post_p3" name="paragraph3" value="" placeholder="Paragraph 3"></textarea>

         <label class="f_lbl" for="post_img4">Post Image Url</label>
         <input class="p_field" id="post_img4" name="imge4" type="text">

         <textarea class="p_field" id="post_p4" name="paragraph4" value="" placeholder="Paragraph 4"></textarea>




         <label class="f_lbl" for="post_tags">Post Tags</label>
         <select multiple class="p_tags" id="post_tags" type="select" name="subject[]">

           <option value="">- - Please Select - -</option>
           <option value="Programming">Job Proposal</option>
           <option value="Illustration">Request a Commission</option>
           <option value="Life">Make a Collaboration</option>

         </select>

         <div class="submit-container">
             {{ csrf_field()}}
           <input type="submit" name="save_button" class="button" value="Save">
         </div>

      </form>
    </div>

  </div>


@endsection
