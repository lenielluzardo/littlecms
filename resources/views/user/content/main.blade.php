@extends('user.layout')

@section('main')

    @include('user.content.breadcrumbs')

    <!-- ===== M A I N ===== -->
    <main id="main" class="main-container">

        @yield('index')

        @yield('subindex')

    </main>

@endsection

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
