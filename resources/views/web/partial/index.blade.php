@section('index')

    <!-- ===== I N D E X ===== -->
    <section id="index" class="index-container">
        <section class="index-content-container content-container">

                <ul class="archive-list">

                    @foreach($model as $item)

                    <li class="archive-list-item">

                        @include('web.partial.preview-item', ['item' => $item])

                    </li>
                    @endforeach
                </ul>

            {{-- @include('controls.paging') --}}

        </section>

    </section>

@endsection
