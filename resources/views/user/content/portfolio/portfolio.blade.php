@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{$model->title }} </h2>
    </div>
@endsection

@extends('user.content.main')

@include('partial.archive', ['items' => $model->items])
