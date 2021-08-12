<ul>

    @foreach ($viewModel->model->entries as $item)
    <li>{{ $item->title }}</li>
    @endforeach

</ul>