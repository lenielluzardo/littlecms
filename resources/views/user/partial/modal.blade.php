<div id="{{$modal['id']}}" class="modal-container {{$modal['class']}}">
    <div class="modal-button modal-close"> X </div>
    <!-- ===== S U B C O N T E N T ===== -->
    <div class="modal-title-container {{$modal['class']}}">
        {!! $modal['title'] !!}
    </div>

    <div class="modal-content-container {{$modal['class']}}">
        {!! $modal['content'] !!}
    </div>

</div>
