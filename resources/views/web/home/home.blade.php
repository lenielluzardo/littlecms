@extends('web.layout')

@section('title', 'Home')

@section('module')

   

@endsection

@if($model->modal !== null)

    @section('modal')

        @include('web.partial.modal', ['modal' => $model->modal])

    @endsection

@endif
