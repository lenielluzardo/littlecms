<!-- ===== A D S ===== -->
<section id="ads" class="ads">
     @foreach ($model->items as $item)

         <div class="ads-img-container">
             <img src="{{$item->ad_img}}" alt="{{$item->description}}">
        </div>

    @endforeach
</section>
