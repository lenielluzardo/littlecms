<div id="overlay" class="overlay-container">

    <div id="modal" class="modal-container {{$modal['class']}}">
        <!-- ===== S U B C O N T E N T ===== -->
        <div class="modal-title-container {{$modal['class']}}-title-container">
            {!! $modal['title'] !!}
        </div>

        <div class="modal-content-container {{$modal['class']}}-content-container">
            {!! $modal['content'] !!}
        </div>

        <div class="modal-button-container {{$modal['class']}}-button-container">
            {!! $modal['button'] !!}
        </div>

    </div>

</div>

