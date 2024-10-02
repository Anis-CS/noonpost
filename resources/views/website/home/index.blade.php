@extends('website.master')

@section('title')
     Personal Blog HTML Template
@endsection

@section('body')

    <main class="main">
        <!--slider-one-->
        @include('website.includes.body.slider')

        <!--blog-Masonry-->
        @include('website.includes.body.blog-masonry')
        <!--/-->

        <!--newslettre-->
        @include('website.includes.body.newslettre')
    </main>

@endsection
