@extends('web.layout')

@section('title', 'Too Many Requests')

@section('main')

    <main id="main" class="main-center">

        <div class="error-container">
            <em class="code">429</em> <em class="message"> Too Many Requests</em>
        </div>

    </main>

@endsection
