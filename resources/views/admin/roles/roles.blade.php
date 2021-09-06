@extends('admin.layout')

@section('title', 'Admin Roles')

@section('module')

    <section class="module_toolbar">
        
        <form method="get" 
            action="{{ route('admin.module.get.create', ['module' => $viewModel->viewModule])}}">

        {{ csrf_field() }}
        <button class="button">New </button>
        </form>

    </section>

    <section class="module-content">

        <table class="admin_table roles_table">
            
            <thead>
                <th> Name </th>
                <th> Info </th>
                <th> Active </th>
                <th> Actions </th>
            </thead>

            <tbody>

                @foreach($viewModel->model as $role)
              
                <tr class="roles_table-role">
                    
                    <form method="POST"
                              action="{{ route('admin.module.save', ['module' => strtolower($viewModel->viewModule) ]) }}" >
                    
                    <td class="roles_table-role_name" >
                        <input type="text" hidden name="id" value="{{ $role->id }}">
                        <input type="text" name="name" value="{{ $role->name}}" >
                    </td>

                    <td class="roles_table-role_info" >
                        <input type="text" name="info" value="{{ $role->info}}" >
                    </td>

                    <td class="roles_table-role_status">
                        <input type="checkbox" name="active" {{ $tag->active ? 'checked' : '' }} >
                    </td>

                    <td class="admin_table-actions roles_table-role_actions">
                            {{ csrf_field() }}
                            <button class="table_button"> Save </button>
                        </form>
                        
                        <form method="POST" 
                            action="{{ route('admin.module.delete', ['module' => strtolower( $viewModel->viewModule ),'id' => $role->id]) }}">
                            
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