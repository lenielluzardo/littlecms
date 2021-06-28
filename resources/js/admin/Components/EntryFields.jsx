import React from 'react';

class EntryFields extends React.Component{
    constructor() {
        super();

    }

    render(){
        return (
                <form className="post_form" action="/admin/users" method="post">
<div class="form-group">

                    <label className="f_lbl" htmlFor="post_title">Post Title</label>
                    <input className="p_field" id="post_title" name="title" type="text" />
</div>
                    <div class="form-group">
                    <label className="f_lbl" htmlFor="post_img1">Post Image Url</label>
                    <input className="p_field" id="post_img1" name="image1" type="text" />
</div>
                    <div class="form-group">
                    <textarea className="p_field" id="post_p1" name="paragraph1"  placeholder="Paragraph 1"></textarea>
</div>
                    <div class="form-group">
                    <label className="f_lbl" htmlFor="post_img2">Post Image Url</label>
                    <input className="p_field" id="post_img2" name="image2" type="text" />
</div>
                    <div class="form-group">
                    <textarea className="p_field" id="post_p2" name="paragraph2"  placeholder="Paragraph 2"></textarea>
</div>
                    <div class="form-group">
                    <label className="f_lbl" htmlFor="post_img3">Post Image Url</label>
                    <input className="p_field" id="post_img3" name="image3" type="text" />
</div>
                    <div class="form-group">
                    <textarea className="p_field" id="post_p3" name="paragraph3"  placeholder="Paragraph 3"></textarea>
                    <div class="form-group">
</div>
                    <label className="f_lbl" htmlFor="post_img4">Post Image Url</label>
                    <input className="p_field" id="post_img4" name="imge4" type="text" />
</div>

                    <textarea className="p_field" id="post_p4" name="paragraph4"  placeholder="Paragraph 4"></textarea>

                </form>
        )
    }
}



export default EntryFields;
