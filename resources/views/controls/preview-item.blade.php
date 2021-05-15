<div class="preview-item preview-container box-container">

    <div class="preview-item-img-container">
        <img src="{{$item->preview_img}}" alt="">
    </div>

    <div class="preview-item-title">
        <h3>{{ $item->title }}</h3>
    </div>

    <div class="preview-item-desc">
        <p>{{ $item->preview_content}}</p>
    </div>

    <div class="box-button-container">
        <a  class="box-button" onclick="showArticle({{$item->id}})">READ</a>
    </div>

</div>
