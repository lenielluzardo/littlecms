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
        
        <table class="admin_table users_table">
            <thead class="users_table-header">

                <th> Thumbnail </th>
                <th> Name </th>
                <th> Nickname </th>
                <th> Email </th>
                <th> Active </th>
                <th> Actions </th>
                
            </thead>

            <tbody class="admin_table-body">
            @foreach($viewModel->model as $user)

                <tr class="users_table-user">
                    
                    <td class="admin_table-thumbnail"
                        style="background-image:url('{{$user->thumbnail}}')">
                    </td>
                    
                    <td><h4> {{ $user->name }} </h4></td>
                    <td><h4> {{ $user->username }} </h4></td>
                    <td><h4> {{ $user->email }} </h4></td>
                    <td><h4> {{ $user->active ? "Yes" : "No" }} </h4></td>

                    <td class="admin_table-actions">
                        
                        <form method="POST" 
                            action="{{ route('admin.module.delete', ['module' => strtolower( $viewModel->viewModule ),'id' => $user->id]) }}">
                            
                            {{ csrf_field() }}
                            <button class="crud-button"> Delete </button>
                        </form>

                        <form method="GET" 
                            action="{{ route('admin.module.get.edit', ['module'=> strtolower( $viewModel->viewModule ), 'id' => $user->id]) }}">
                            
                            {{ csrf_field() }}
                            <button class="crud-button"> Edit </button>
                        </form>
            
                    </td>
                </tr>

            @endforeach
            </tbody>

        </table>
    </section>

@endsection
