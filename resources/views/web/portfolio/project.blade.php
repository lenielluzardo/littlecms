@extends('web.layout')

@section('title') <?php print("$viewModel->viewTitle") ?> @endsection

@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{$viewModel->viewTitle }} </h2>
    </div>
@endsection

@section('module')

    <?php $title = $viewModel->model->title ?>

    <!-- ===== S U B C O N T E N T ===== -->
    <section class="sub-content-container">

        <div class="box-container">

            <article id="project-{{$viewModel->model->id}}" class="box-item project-container single-entry">

                <section class="box-item-img-container single-entry-title">
                    <img src="{{$viewModel->model->image1}}" alt="{{$viewModel->model->title}}">
                </section>

                <div class="box-item-title-container">
                    <h2 > {{$viewModel->model->title}} </h2>
                </div>

                <section class="box-item-meta-container">
                    <h5 class="publication-date"> {{$viewModel->model->created_at}} </h2>
                </section>

                <section class="box-item-content-container single-entry-content">

                    {!! $viewModel->model->content !!}

                </section>

            </article>

        </section>

    </section>

@endsection

@section('title') <?php print("$viewModel->model->title") ?> @endsection
