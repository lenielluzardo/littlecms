@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{$viewModel->path }} </h2>
    </div>
@endsection

@extends('web.blog.main')

@include('web.partial.index', ['model' => $viewModel->model])

@include('web.partial.subindex', ['model' => $viewModel->model])

@section('title') <?php print("$viewModel->title") ?> @endsection
