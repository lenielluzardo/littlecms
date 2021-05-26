@section('index')

    <!-- ===== I N D E X ===== -->
    <section id="index" class="index-container">
        @include('controls.filter')

        {{-- <section class="index-content-container content-container"> --}}


                <ul class="archive-list">

                    @foreach($items as $item)

                    <li class="archive-list-item">

                        @include('controls.preview-item', ['item' => $item])

                    </li>
                    @endforeach
                </ul>

            {{-- @include('controls.paging') --}}

        {{-- </section> --}}

    </section>

@endsection
