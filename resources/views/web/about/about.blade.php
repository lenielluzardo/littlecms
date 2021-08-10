{{-- @extends('web.blog.section') --}}

@section('title', 'About')

@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{$viewModel->viewModule}} </h2>
    </div>
@endsection

@extends('web.layout')

@section('module')

    <!-- ===== A B O U T ===== -->
    <section class="{{$viewModel->viewModule}}">

        <header class="{{ $viewModel->viewModule }}_header">

            <div class="{{ $viewModel->viewModule }}_header-image">
            
                <img src="{{ $viewModel->model->thumbnail }}" 
                alt="{{ $viewModel->model->name.' profile picture' }}" />
            
            </div>

            <div class="{{ $viewModel->viewModule }}_header-description">
                   
                {!! $viewModel->model->description !!}
            
            </div>
        
        </header>

       <section class="{{ $viewModel->viewModule }}_body">
            @foreach($viewModel->model->fields as $key => $value)
                
                <div id="{{ $viewModel->viewModule}}_body-{{$key}}"
                     class="{{ $viewModel->viewModule}}_body-section"
                    > {!! $value !!} </div>

            @endforeach
       </section>

       <footer class="{{ $viewModel->viewModule }}_footer">

       </footer>
      
    </section>
@endsection


