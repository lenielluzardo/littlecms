{{-- @extends('web.blog.section') --}}

@section('title', 'About')

@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{$viewModel->viewModule}} </h2>
    </div>
@endsection

@extends('admin.layout')

@section('module')

    <!-- ===== A B O U T ===== -->
    <section class="module_content">
<form method="POST" action="{{ route('admin.module.save', ['module' => $viewModel->viewModule ]) }}">

    <input type="text" name="id" hidden value="{{$viewModel->model->id}}">

            <div class="{{ $viewModel->viewModule }}_header-image">
            
             <img src="{{ $viewModel->model->thumbnail }}" 
                alt="{{ $viewModel->model->name.' profile picture' }}" />

                <input type="text" name="thumbnail" value="{{$viewModel->model->thumbnail}}">            
            </div>

            <div class="{{ $viewModel->viewModule }}_header-description">

                @include('admin.partial.ckeditor', ['editorId' => 'description', 'content' =>$viewModel->model->description])

            </div>
        

        @foreach($viewModel->model->fields as $key => $value)
            <div class="{{ $viewModel->viewModule }}_body">
        
                @include('admin.partial.ckeditor', ['editorId' => $key, 'content' =>$value])
        
            </div>
        @endforeach
                        
    </section>
{{ csrf_field() }}
    <button>
        SAVE
    </button>
</form>
@endsection


