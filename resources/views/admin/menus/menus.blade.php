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

        <table class="admin_table menus_table">
            
            <thead>
                <th> Name </th>
                <th> Url </th>
                <th> Active </th>
                <th> Actions </th>
            </thead>

            <tbody>

                @foreach($viewModel->model as $menu)
              
                <tr class="menus_table-role">
                    
                    <form method="POST"
                              action="{{ route('admin.module.save', ['module' => strtolower($viewModel->viewModule) ]) }}" >
                    
                    <td class="menus_table-role_name" >
                        <input type="text" hidden name="id" value="{{ $menu->id }}">
                        <input type="text" name="name" value="{{ $menu->name}}" >
                    </td>

                    <td class="menus_table-role_url" >
                        <input type="text" name="url" value="{{ $menu->url}}" >
                    </td>

                    <td class="menus_table-role_parent" >
                        <input type="text" name="parent_id" value="{{ $menu->parent_id}}" >
                    </td>

                    <td class="menus_table-role_status">
                        <input type="checkbox" name="active" {{ $menu->active ? 'checked' : '' }} >
                    </td>

                    <td class="admin_table-actions menus_table-role_actions">
                            {{ csrf_field() }}
                            <button class="table_button"> Save </button>
                        </form>
                        
                        <form method="POST" 
                            action="{{ route('admin.module.delete', ['module' => strtolower( $viewModel->viewModule ),'id' => $menu->id]) }}">
                            
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