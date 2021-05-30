<div class="new_post-container">
    <button class="new_button button">New Post</button>
    </div>

    <div class="post_detail-container">
    <form class="post_form" action="" method="post">

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
        {{-- <select multiple class="p_tags" type="select" name="tags[]">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select> --}}

        <div class="submit-container">
        <form method="post" action="{{ route('admin.save') }}">
            {{ csrf_field()}}
            <input type="submit" name="save_button" class="button" value="Save">
            </form>
        </div>

    </form>
    </div>
