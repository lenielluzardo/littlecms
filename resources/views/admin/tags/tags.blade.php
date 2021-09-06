@extends('admin.layout')

@section('title', 'Admin Tags')

@section('module')

    <section class="module_toolbar">
        
        <form method="get" 
            action="{{ route('admin.module.get.create', ['module' => $viewModel->viewModule])}}">

        {{ csrf_field() }}
        <button class="button">New </button>
        </form>

    </section>

    <section class="module-content">

        <table class="admin_table tags_table">
            
            <thead>
                <th> Name </th>
                <th> Status </th>
                <th> Actions </th>
            </thead>

            <tbody>

                @foreach($viewModel->model as $tag)
              
                <tr class="tags_table-tag">
                    
                    <form method="POST"
                              action="{{ route('admin.module.save', ['module' => strtolower($viewModel->viewModule) ]) }}" >
                    
                    <td class="tags_table-tag_name" >
                        <input type="text" hidden name="id" value="{{ $tag->id }}">
                        <input type="text" name="name" value="{{ $tag->name}}" >
                    </td>
                    
                    <td class="tags_table-tag_status">
                        <input type="checkbox" name="active" {{ $tag->active ? 'checked' : '' }} >
                        <label for="active"> {{ $tag->active ? 'Active' : 'Inactive' }} </label>
                    </td>

                    <td class="admin_table-actions tags_table-tag_actions">
                            {{ csrf_field() }}
                            <button class="table_button"> Save </button>
                        </form>
                        
                        <form method="POST" 
                            action="{{ route('admin.module.delete', ['module' => strtolower( $viewModel->viewModule ),'id' => $tag->id]) }}">
                            
                            {{ csrf_field() }}
                            <button class="crud-button"> Delete </button>
                        </form>
                    </td>
                    
                </tr>

                @endforeach
            
            </tbody>

        </table>
    </section>

@endsection