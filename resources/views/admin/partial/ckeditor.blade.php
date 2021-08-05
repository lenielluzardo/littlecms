<textarea id="editor" name="content"> 
	{{ $content }}
</textarea>


@section('scripts')
<script src="{{ asset('ckeditor5-build-classic/ckeditor.js')}}"></script>

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>
@endsection