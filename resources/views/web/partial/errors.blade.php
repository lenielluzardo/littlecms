@if(count($errors->all()))
<div class="error_msg-container">
    <div class="error_msg">
        <ul class="error_list">
            @foreach($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
