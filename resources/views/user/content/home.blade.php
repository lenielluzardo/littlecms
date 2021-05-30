@extends('user.layout')

@section('title', 'Home')

@section('main')

    <main id="main" class="main-center">

        <div class="salute">
            <em class="not">Not,</em> <em class="just-another-blog">Just Another Developer Blog. </em>
        </div>

    </main>

@endsection

@if($model->modal !== null)

    @section('modal')

        @include('partial.modal', ['modal' => $model->modal])

    @endsection

@endif
