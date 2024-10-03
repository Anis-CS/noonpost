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
                                <a href="{{ route('author') }}" class="image">
                                    <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="banner__author-img">
                                </a>
                            </div>
                            <div class="banner__author-content">
                                <h5 class="banner__author-name"> Hi, I'm David Smith</h5>
                                <div class="btn-link">13 Articles</div>
                                <p class="banner__author-bio">
                                    I'm David Smith, husband and father ,
                                    I love Photography,travel and nature. I'm working as a writer and blogger with experience
                                    of 5 years until now.
                                </p>
                                <ul class="list-inline social-media social-media--layout-two">
                                    <li class="social-media__item">
                                        <a href="#" class="social-media__link color-facebook" ><i class="bi bi-facebook"></i></a>
                                    </li>

                                    <li class="social-media__item">
                                        <a href="#" class="social-media__link color-instagram"><i class="bi bi-instagram"></i></a>
                                    </li>
                                    <li class="social-media__item">
                                        <a href="#" class="social-media__link color-twitter"><i class="bi bi-twitter-x"></i></a>
                                    </li>
                                    <li class="social-media__item">
                                        <a href="#" class="social-media__link color-youtube"><i class="bi bi-youtube"></i></a>
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
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/12.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">5 Effective Ways I’m Finding Focus in a Busy Season of Life</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Post-2-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/6.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">Get the Most Out of Iceland with our 10 Travel Tips</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Post-3-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/14.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">7 Holiday Decor Ideas and Exactly What I Love About Each One</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Post-4-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/1.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">7 Holiday Decor Ideas and Exactly What I Love About Each One</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Post-5-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/3.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">Get the Most Out of Iceland with our 10 Travel Tips</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Post-6-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/11.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">Get the Most Out of Iceland with our 10 Travel Tips</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Post-7-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/2.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">5 Effective Ways I’m Finding Focus in a Busy Season of Life</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Post-8-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/4.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Post-9-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="post-card post-card--default">
                            <div class="post-card__image">
                                <a href="{{ route('post.default') }}" >
                                    <img src="{{ asset('/') }}website/assets/img/blog/15.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-card__content">
                                <a href="blog-grid.html" class="category">lifestyle</a>
                                <h5 class="post-card__title">
                                    <a href="{{ route('post.default') }}" class="post-card__title-link">Get the Most Out of Iceland with our 10 Travel Tips</a>
                                </h5>
                                <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                </p>

                                <ul class="post-card__meta list-inline">
                                    <li class="post-card__meta-item">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                        </a>
                                    </li>
                                    <li class="post-card__meta-item ">
                                        <a href="{{ route('author') }}" class="post-card__meta-link">David Smith</a>
                                    </li>
                                    <li class="post-card__meta-item">
                                        <span class="dot"></span> February 10, 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
