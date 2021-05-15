@extends('user.layout')

@section('main')

    @include('user.content.breadcrumbs')

    <!-- ===== M A I N ===== -->
    <main id="main" class="main-container">

        <!-- ===== C O N T E N T ===== -->
        <section id="index" class="index-container">

            @yield('index')

        </section>

        <section id="subindex" class="sub-index-container">

            <!-- ===== S U B C O N T E N T ===== -->
            <section class="sub-content-container box-container entry-container">

                @yield('subindex')

            </section>

        </section>

    </main>

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
