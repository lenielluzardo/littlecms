@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{$model->path }} </h2>
    </div>
@endsection

@extends('user.content.main')

@include('partial.archive', ['items' => $model->items])

@section('title') <?php print("$model->title") ?> @endsection
