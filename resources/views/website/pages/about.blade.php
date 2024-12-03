@extends('website.master')

@section('title')
    Personal Blog HTML Template
@endsection

@section('body')

    <main class="main">
        <!--about-us-->
        <section class="m-top mb-10">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl-9 m-auto">
                        <div class="about-us">
                            <div class="about-us__image">
                                <img src="{{ asset($abouts->image) }}" alt="about-image" class="about-us__img">
                            </div>
                            <div class="about-us__description">
                                {!! $abouts->long_description !!}
                                <div class="about-us__qoute">
                                    <i class="bi bi-quote about-us__qoute-icon"></i>

                                    <h3 class="about-us__qoute-item">
                                        {!! $abouts->title !!}
                                    </h3>
                                </div>
                                {!! $abouts->short_description !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--newslettre-->
        @include('website.includes.body.newslettre')
    </main>

@endsection
