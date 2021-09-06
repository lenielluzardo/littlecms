@extends('admin.layout')

@section('title', 'Admin')

@section('module')

    <section class="module-content">

        <table class="admin_table modules_table">
            
            <thead>
                <th> Name </th>
                <th> Status </th>
                <th> Actions </th>
            </thead>

            <tbody>

                @foreach($viewModel->model as $module)
              
                <tr class="modules_table-module">
                    <form method="POST"
                              action="{{ route('admin.module.save', ['module' => strtolower($viewModel->viewModule) ]) }}" >

                        <td class="modules_table-module_name" >
                            <input type="text" hidden name="id" value="{{ $module->id }}">
                            {{ $module->name}}
                        </td>

                        <td class="modules_table-module_status">
                            <input type="checkbox" name="active" {{ $module->active ? "checked" : "" }} /> 
                            <label for="active"> {{ $module->active ? "Active" : "Inactive" }} </label>
                        </td>

                        <td class="admin_table-actions modules_table-module_actions">
                            {{ csrf_field() }}
                            <button class="table_button"> Save </button>
                        </td>

                    </form>
                </tr>

                @endforeach
            
            </tbody>

        </table>
    </section>

@endsection