<textarea id="{{$editorId}}" name="{{$editorId}}"> 
	{{ $content }}
</textarea>

<script src="{{ asset('ckeditor5-build-classic/ckeditor.js')}}"></script>
<script>
	var editorId = '{{ $editorId }}';
	ClassicEditor
		.create( document.querySelector('#'+editorId), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>