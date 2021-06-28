@extends('admin.layout')

@section('main')

    <section class="module">

        @include('admin.modules.users.user_fields', ['user' => $model->items])

    </section>

@endsection
