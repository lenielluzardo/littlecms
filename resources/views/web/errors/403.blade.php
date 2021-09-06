@extends('web.layout')

@section('title', 'Forbidden')

@section('main')

    <main id="main" class="main-center">

        <div class="error-container">
            <em class="code">403</em> <em class="message">{{$exception->getMessage() ?: Forbidden }}</em>
        </div>

    </main>

@endsection
