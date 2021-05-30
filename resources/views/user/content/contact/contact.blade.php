@section('title', 'Contact')

@section('path')
<div class="path-section">
    <h2 class="section-title">
        / Contact
    </h2>
</div>
@endsection

@extends('user.layout')

@section('main')

    @include('user.content.breadcrumbs')

    <!-- ===== I N D E X ===== -->
    <main id="main" class="main-center">

        @include('partial.errors')

        {{-- <section class="index-content-container content-container"> --}}

            @include('user.content.contact.form')

        {{-- </section> --}}

    </main>


@endsection

@if($model->modal !== null )

    @section('modal')

        @include('partial.modal', ['modal' => $model->modal])

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
