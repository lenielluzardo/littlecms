@section('title', 'Contact')

@section('breadcrumbs')

    @include('web.partial.breadcrumbs', ['paths' => $viewModel->viewPath])

@endsection

@extends('web.layout')

@section('module')

    @include('web.contact.form')

@endsection

@if($viewModel->modal !== null )

    @section('modal')

        @include('web.partial.modal', ['modal' => $viewModel->modal])

    @endsection

@endif

@section('scripts')
    <script src="{{asset('/js/app.js')}}"></script>
<script>
        function showArticle(id){

            let $entry = $('#entry-'+id);
            let $display = $entry.css('display');

            if($display !== 'none')
            {
                return;
            }
            $('#subindex').show();
            $('.entry').css('display', 'none');
            $('#entry-'+id).toggle('ease-in-out');
            document.title += " | " + $('#entry-title').text();
        }
    </script>
@endsection
