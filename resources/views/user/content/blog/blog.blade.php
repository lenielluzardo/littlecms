@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{$model->path }} </h2>
    </div>
@endsection

@extends('user.content.main')

@include('partial.index', ['items' => $model->items])

@include('partial.subindex', ['items' => $model->items])

@section('title') <?php print("$model->title") ?> @endsection
