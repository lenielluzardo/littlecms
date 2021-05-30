@section('subindex')
 
  <!-- ===== S U B I N D E X ===== -->
  
  <section id="subindex" class="sub-index-container">

    <section class="subindex-content-container content-container">

      @foreach ($items as $item )

        @include('partial.entry', ['item' => $item])

      @endforeach

    </section>

  </section>

@endsection
