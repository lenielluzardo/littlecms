<table class="admin_table">
    <thead class="admin_table-header">

        @foreach($viewModel->model[0]->getAttributes() as $key => $value)
            <th>
                {{$key}}
            </th>
        @endforeach
        
    </thead>

    <tbody class="admin_table-body">
    @foreach($viewModel->model as $item)

        <tr class="admin_table-row">
        @foreach($item->getAttributes() as $key => $value)
                    
            <td class="admin-table-row_data"> {{ $value }} </td>

        @endforeach
        </tr>

    @endforeach
    </tbody>

</table>