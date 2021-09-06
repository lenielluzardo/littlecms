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
    
        <table>
           
            <thead>
                <th> Thumbnail </th>
                <th> Title </th>
                <th> Content </th>
                <th> Active </th>
                <th> Actions </th>
            </thead>
            
            <tbody>
            
                @foreach ($viewModel->model as $field)
                <tr>
                    <td style="background-image: url('{{ $field->thumbnail }}');"></td>
                    <td> {{ $field->title }} </td>
                    <td> {{ $field->content }} </td>
                    <td> {{ $field->active }} </td>
                    <td> 
                        <form method="GET" action="{{ route('admin.module.get.edit', ['module' => 'about', 'id' => $field->id ]) }}">
                            <button> Edit </button>
                        </form>
                        <form method="POST" action="{{ route('admin.module.delete', ['module' => 'about', 'id' => $field->id ]) }}">
                            {{ csrf_field() }}
                            <button> Delete </button>
                        </form>
                    </td>
                </tr>    
                @endforeach
            
            </tbody>
        </table>

    {{-- <form method="POST" action="{{ route('admin.module.save', ['module' => $viewModel->viewModule ]) }}">

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
</form> --}}
@endsection


