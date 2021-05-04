<div class="preview-item preview-container box-container">
    <div class="preview-item-img-container">
        <img src="{{$item->image1}}" alt="">
    </div>

    <h3 class="preview-item-title">{{ $item->title }}</h3>
    <p class="preview-item-desc"> {{ $item->paragraph1}}</p>

    <div class="box-button-container">
        <a  class="box-button" onclick="showArticle({{$item->id}})">READ</a>
    </div>

</div>
