@section('path')
<div class="path-section">
    <h2 class="section-title">
        / Contact
        {{-- / {{ $section }} --}}
    </h2>
</div>
@endsection

@extends('user.content.main')

@section('index')

    <!-- ===== S U B C O N T E N T ===== -->
    @include('partial.errors')

    @include('user.content.contact.form')


@endsection

@section('modal')

    @include('partial.modal', ['modal' => $modal])

@endsection
