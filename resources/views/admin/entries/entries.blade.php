@extends('admin.layout')

@section('module')

    <div class="module_toolbar">
    
        <form method="get" 
              action="{{ route('admin.module.get.create', ['module' => $viewModel->viewModule])}}">

        {{ csrf_field() }}
        <button class="button">New </button>
        </form>
    
    </div>

    <section class="module_content">
    
        <table class="admin_table entries_table">
            <thead class="admin_table-header" >
                
                <th> Thumbnail </th>
                <th> Title </th>
                <th> Content </th>
                <th> Actions </th>

            </thead>
           
            <tbody class="admin_table-body">
             @foreach( $viewModel->model as $entry )
    
                <tr class="entries_table-entry">
                    
                    <td class="admin_table-thumbnail entries_table-entry_thumbnail" 
                        style="background-image:url('{{$entry->thumbnail}}')">
                    </td>
                
                    <td class="entries_table-entry_title">
                        <h4>{{ $entry->title }}</h4>
                    </td>

                    <td class="entries_table-entry_content">
                        <p>{{ $entry->content }}</p>
                    </td>
                
                    <td class="admin_table-actions">
                        
                        <form method="POST" 
                            action="{{ route('admin.module.delete', ['module' => $viewModel->viewModule,'id' => $entry->id]) }}">
                            
                            {{ csrf_field() }}
                            <button class="crud-button"> Delete </button>
                        </form>

                        <form method="GET" 
                            action="{{ route('admin.module.get.edit', ['module'=> $viewModel->viewModule, 'id' => $entry->id]) }}">
                            
                            {{ csrf_field() }}
                            <button class="crud-button"> Edit </button>
                        </form>
            
                    </td>
                </tr>
    
            @endforeach
            </tbody>

        </table>
    
    </section>

<!-- ========================================== -->

@endsection

@section('scripts')

@endsection


