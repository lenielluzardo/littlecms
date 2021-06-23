@extends('admin.layout')

@section('main')

    <section class="module">

        @include('admin.modules.user.fields', ['user' => $model->items])

    </section>

@endsection
