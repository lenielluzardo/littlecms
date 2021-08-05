<form method="POST" action="{{ route('admin.module.save', ['module' => $viewModel->viewModule]) }}" >

	<div class="form-group">
		<input type="hidden" name="id" value="{{ $viewModel->model->id }}">
	</div>

    <div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" value="{{ $viewModel->model->title }}">
	</div>

	<div class="form-group">
		<label for="thumbnail">Thumbnail Url</label>
		<input type="text" name="thumbnail" value="{{ $viewModel->model->thumbnail }}">
	</div>

	<div class="form-group">
		@include('admin.partial.ckeditor', ['content' => $viewModel->model->content])
	</div>

	<div class="form-group">
		<label for="category_id"></label>
		<select name="category_id"> 

            @foreach ($viewModel->entriesCategories as $category)
            
			@if ($category->id == $viewModel->model->category_id)
				<option value="{{ $category->id }}" selected> {{ $category->name }} </option>            
			@else
            	<option value="{{ $category->id }}"> {{ $category->name }} </option>            
			@endif
           
            @endforeach

        </select>
	</div>

	<div class="form-group">
		<label for="module_id"></label>
		<select name="module_id"> 

            @foreach ($viewModel->entriesModules as $module)
				
			@if ($module->id == $viewModel->model->module_id)
				<option value="{{ $module->id }}" selected> {{ $module->name }}</option>
			@else
				<option value="{{ $module->id }}"> {{ $module->name }}</option>
			@endif	
           
			@endforeach
			
		</select>
	</div>

    <div class="form-group">
        <label for="active">Active?</label>
        <input type="checkbox" name="active" {{$viewModel->model->active ? "checked" : ""}}>
    </div>
	
	<div class="form-group">
		{{csrf_field()}}
		<button>Save</button>            
	</div>

</form>


