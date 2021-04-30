<?php $title = "Portfolio" ?>

@extends('user.content.main')

@section('main')

    <?php $title = $item->title ?>

    <!-- ===== S U B C O N T E N T ===== -->
    <section class="sub-content-container">

        <div class="box-container">

            <article id="project-{{$item->id}}" class="box-item project-container single-entry">

                <section class="box-item-img-container single-entry-title">
                    <img src="{{$item->image1}}" alt="{{$item->title}}">
                </section>

                <div class="box-item-title-container">
                    <h2 > {{$item->title}} </h2>
                </div>

                <section class="box-item-meta-container">
                    <h5 class="publication-date"> {{$item->created_at}} </h2>
                </section>

                <section class="box-item-content-container single-entry-content">

                    <p> {!! $item->paragraph1 !!} </p><br>
                    <p> {!! $item->paragraph2 !!} </p><br>
                    <p> {!! $item->paragraph3 !!} </p><br>
                    <p> {!! $item->paragraph4 !!} </p><br>

                </section>

            </article>

        </section>

    </section>

@endsection

@section('title') <?php print("$item->title") ?> @endsection
