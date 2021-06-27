import React from 'react';

class EntryFields extends React.Component{
    constructor() {
        super();

    }

    render(){
        return (
            <div className="new_post-container">
            <button className="new_button button">New Post</button>

            <div className="post_detail-container">
                <form className="post_form" action="/admin/users" method="post">

                    <label className="f_lbl" htmlFor="post_title">Post Title</label>
                    <input className="p_field" id="post_title" name="title" type="text" />

                    <label className="f_lbl" htmlFor="post_img1">Post Image Url</label>
                    <input className="p_field" id="post_img1" name="image1" type="text" />

                    <textarea className="p_field" id="post_p1" name="paragraph1"  placeholder="Paragraph 1"></textarea>

                    <label className="f_lbl" htmlFor="post_img2">Post Image Url</label>
                    <input className="p_field" id="post_img2" name="image2" type="text" />

                    <textarea className="p_field" id="post_p2" name="paragraph2"  placeholder="Paragraph 2"></textarea>

                    <label className="f_lbl" htmlFor="post_img3">Post Image Url</label>
                    <input className="p_field" id="post_img3" name="image3" type="text" />

                    <textarea className="p_field" id="post_p3" name="paragraph3"  placeholder="Paragraph 3"></textarea>

                    <label className="f_lbl" htmlFor="post_img4">Post Image Url</label>
                    <input className="p_field" id="post_img4" name="imge4" type="text" />

                    <textarea className="p_field" id="post_p4" name="paragraph4"  placeholder="Paragraph 4"></textarea>

                </form>
            </div>
        </div>
        )
    }
}



export default EntryFields;
