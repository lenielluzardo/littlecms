@extends('user.content.main')

@section('main')

    <!-- ===== S U B C O N T E N T ===== -->
    @include('user.partial.errors')

    @include('user.content.contact.form')

    @include('user.partial.modal', ['modal' => $modal])

@endsection
