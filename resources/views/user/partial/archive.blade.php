@section('path')
    <div class="path-section">
        <h2 class="section-title"> / {{ $path }} </h2>
    </div>
@endsection

@section('index')

    <!-- ===== S U B C O N T E N T ===== -->
    @include('user.partial.index')

@endsection

@section('subindex')

    @foreach ($items as $item )

        @include('user.partial.entry', ['item' => $item])

    @endforeach

@endsection
