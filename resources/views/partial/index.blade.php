@section('index')

    <!-- ===== I N D E X ===== -->
    <section id="index" class="index-container">
        <section class="index-content-container content-container">
        @include('controls.filter')

                <ul class="archive-list">

                    @foreach($items as $item)

                    <li class="archive-list-item">

                        @include('controls.preview-item', ['item' => $item])

                    </li>
                    @endforeach
                </ul>

            {{-- @include('controls.paging') --}}

        </section>

    </section>

@endsection
