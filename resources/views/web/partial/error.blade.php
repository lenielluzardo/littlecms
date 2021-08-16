@if ($errors->has($field))
    <span class="validation_error"> {{ $errors->first($field) }}
    </span>
@endif