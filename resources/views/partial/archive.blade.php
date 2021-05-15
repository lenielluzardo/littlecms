@section('index')

    <!-- ===== S U B C O N T E N T ===== -->
    @include('partial.index')

@endsection

@section('subindex')

    @foreach ($items as $item )

        @include('partial.entry', ['item' => $item])

    @endforeach

@endsection
