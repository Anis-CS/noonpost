@extends('website.master')

@section('title')
    Personal Blog HTML Template
@endsection

@section('body')

    <main class="main">
        <!--author-->
        <section class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-11 m-auto">
                        <div class="banner__author ">
                            <div class="banner__author-image">
                                <a href="#" class="image">
                                    <img src="{{ asset($author->image) }}" alt="" class="banner__author-img">
                                </a>
                            </div>
                            <div class="banner__author-content">
                                <h5 class="banner__author-name"> Hi, I'm {{ $author->name }}</h5>
                                <div class="btn-link">13 Articles</div>
                                <p class="banner__author-bio">
                                    {!! $author->description !!}
                                </p>
                                <ul class="list-inline social-media social-media--layout-two">
                                    <li class="social-media__item">
                                        <a href="" class="social-media__link color-facebook" ><i class="bi bi-facebook"></i></a>
                                    </li>

                                    <li class="social-media__item">
                                        <a href="" class="social-media__link color-instagram"><i class="bi bi-instagram"></i></a>
                                    </li>
                                    <li class="social-media__item">
                                        <a href="" class="social-media__link color-twitter"><i class="bi bi-twitter-x"></i></a>
                                    </li>
                                    <li class="social-media__item">
                                        <a href="" class="social-media__link color-youtube"><i class="bi bi-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--grid-layout-->
        <section class="mt-90">
            <div class="container-fluid">

                <div class="row">
                    <!--Post-1-->
                    @foreach($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset($blog->image) }}" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">{{ $blog->category->name }}</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">{{ $blog->title }}</a>
                                </h5>
                                <p class="post-card__exerpt">{!! $blog->long_description !!}</p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author.info', $blog->author->id ) }}" class="post-card__meta-link">
                                            <img src="{{ asset($blog->author->image) }}" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author.info', $blog->author->id ) }}" class="post-card__meta-link">{{ $blog->author->name }}</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> {{($blog->created_at)->isoFormat('MMM Do YYYY')}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!--pagination-->
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="pagination list-inline">
                            <li class="pagination__item pagination__item--active"><a href="#" class="pagination__link">1</a></li>
                            <li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
                            <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>
                            <li class="pagination__item"><a href="#" class="pagination__link">4</a></li>
                            <li class="pagination__item"><a href="#" class="pagination__link"><i class="bi bi-arrow-right pagination__icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--/-->

        <!--newslettre-->
        @include('website.includes.body.newslettre')
    </main>

@endsection
