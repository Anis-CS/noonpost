@extends('website.master')

@section('title')
    Personal Blog HTML Template
@endsection

@section('body')

    <main class="main">
        <!--Banner-->
        <section class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="banner__content ">
                            <small class="banner__meta">
                                <a href="{{ route('home') }}}" class="banner__link">Home</a>
                                <i class="bi bi-caret-right-fill banner__icon"></i>livestyle
                            </small>
                            <h3 class="banner__title">Category : <span class="banner__category-color"> livestyle</span></h3>
                            <p class="banner__subtitle"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Incidunt quae explicabo, ducimus necessitatibus eum aut enim modi
                                saepe perspiciatis fugit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--blog-grid-->
        <section class="blog-classic">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9  side-content ">
                        <div class="theiaStickySidebar">
                            <div class="row">
                                <div class="col-lg-12 pl-45">
                                    <!--Post-1-->
                                    <div class="post-card post-card--list">
                                        <div class="post-card__image">
                                            <a href="post-default.html" >
                                                <img src="{{ asset('/') }}website/assets/img/blog/11.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="post-card__content">
                                            <a href="blog-grid.html" class="category">fashion</a>
                                            <h4 class="post-card__title">
                                                <a href="post-default.html" class="post-card__title-link">5 Effective Ways I’m Finding Focus in a Busy Season of Life</a>
                                            </h4>
                                            <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                            </p>

                                            <ul class="post-card__meta list-inline">
                                                <li class="post-card__meta-item">
                                                    <a href="author.html" class="post-card__meta-link">
                                                        <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                                    </a>
                                                </li>
                                                <li class="post-card__meta-item ">
                                                    <a href="author.html" class="post-card__meta-link">David Smith</a>
                                                </li>
                                                <li class="post-card__meta-item">
                                                    <span class="dot"></span> February 10, 2022
                                                </li>
                                                <li class="post-card__meta-item"> <span class="dot"></span> 15 min Read</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Post-2-->
                                    <div class="post-card post-card--list">
                                        <div class="post-card__image">
                                            <a href="post-default.html" >
                                                <img src="{{ asset('/') }}website/assets/img/blog/16.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="post-card__content">
                                            <a href="blog-grid.html" class="category">travel</a>
                                            <h4 class="post-card__title">
                                                <a href="post-default.html" class="post-card__title-link">Get the Most Out of Iceland with our 10 Travel Tips</a>
                                            </h4>
                                            <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                            </p>

                                            <ul class="post-card__meta list-inline">
                                                <li class="post-card__meta-item">
                                                    <a href="author.html" class="post-card__meta-link">
                                                        <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                                    </a>
                                                </li>
                                                <li class="post-card__meta-item ">
                                                    <a href="author.html" class="post-card__meta-link">David Smith</a>
                                                </li>
                                                <li class="post-card__meta-item">
                                                    <span class="dot"></span> February 10, 2022
                                                </li>
                                                <li class="post-card__meta-item"> <span class="dot"></span> 15 min Read</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Post-3-->
                                    <div class="post-card post-card--list">
                                        <div class="post-card__image">
                                            <a href="post-default.html" >
                                                <img src="{{ asset('/') }}website/assets/img/blog/14.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="post-card__content">
                                            <a href="blog-grid.html" class="category">interior</a>
                                            <h4 class="post-card__title">
                                                <a href="post-default.html" class="post-card__title-link">7 Holiday Decor Ideas and Exactly What I Love About Each One</a>
                                            </h4>
                                            <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                            </p>

                                            <ul class="post-card__meta list-inline">
                                                <li class="post-card__meta-item">
                                                    <a href="author.html" class="post-card__meta-link">
                                                        <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                                    </a>
                                                </li>
                                                <li class="post-card__meta-item ">
                                                    <a href="author.html" class="post-card__meta-link">David Smith</a>
                                                </li>
                                                <li class="post-card__meta-item">
                                                    <span class="dot"></span> February 10, 2022
                                                </li>
                                                <li class="post-card__meta-item"> <span class="dot"></span> 15 min Read</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Post-4-->
                                    <div class="post-card post-card--list">
                                        <div class="post-card__image">
                                            <a href="post-default.html" >
                                                <img src="{{ asset('/') }}website/assets/img/blog/9.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="post-card__content">
                                            <a href="blog-grid.html" class="category">Food</a>
                                            <h4 class="post-card__title">
                                                <a href="post-default.html" class="post-card__title-link">What Are Your Tips for Hosting an Easy Birthday Party?</a>
                                            </h4>
                                            <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                            </p>

                                            <ul class="post-card__meta list-inline">
                                                <li class="post-card__meta-item">
                                                    <a href="author.html" class="post-card__meta-link">
                                                        <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                                    </a>
                                                </li>
                                                <li class="post-card__meta-item ">
                                                    <a href="author.html" class="post-card__meta-link">David Smith</a>
                                                </li>
                                                <li class="post-card__meta-item">
                                                    <span class="dot"></span> February 10, 2022
                                                </li>
                                                <li class="post-card__meta-item"> <span class="dot"></span> 15 min Read</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Post-5-->
                                    <div class="post-card post-card--list">
                                        <div class="post-card__image">
                                            <a href="post-default.html" >
                                                <img src="{{ asset('/') }}website/assets/img/blog/8.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="post-card__content">
                                            <a href="blog-grid.html" class="category">travel</a>
                                            <h4 class="post-card__title">
                                                <a href="post-default.html" class="post-card__title-link">Get the Most Out of Iceland with our 10 Travel Tips</a>
                                            </h4>
                                            <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                            </p>

                                            <ul class="post-card__meta list-inline">
                                                <li class="post-card__meta-item">
                                                    <a href="author.html" class="post-card__meta-link">
                                                        <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                                    </a>
                                                </li>
                                                <li class="post-card__meta-item ">
                                                    <a href="author.html" class="post-card__meta-link">David Smith</a>
                                                </li>
                                                <li class="post-card__meta-item">
                                                    <span class="dot"></span> February 10, 2022
                                                </li>
                                                <li class="post-card__meta-item"> <span class="dot"></span> 15 min Read</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Post-6-->
                                    <div class="post-card post-card--list">
                                        <div class="post-card__image">
                                            <a href="post-default.html" >
                                                <img src="{{ asset('/') }}website/assets/img/blog/11.jpg" alt="">
                                            </a>
                                        </div>

                                        <div class="post-card__content">
                                            <a href="blog-grid.html" class="category">livestyle</a>
                                            <h4 class="post-card__title">
                                                <a href="post-default.html" class="post-card__title-link">5 Effective Ways I’m Finding Focus in a Busy Season of Life</a>
                                            </h4>
                                            <p class="post-card__exerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quam atque ipsa laborum sunt distinctio...
                                            </p>

                                            <ul class="post-card__meta list-inline">
                                                <li class="post-card__meta-item">
                                                    <a href="author.html" class="post-card__meta-link">
                                                        <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="post-card__meta-img">
                                                    </a>
                                                </li>
                                                <li class="post-card__meta-item ">
                                                    <a href="author.html" class="post-card__meta-link">David Smith</a>
                                                </li>
                                                <li class="post-card__meta-item">
                                                    <span class="dot"></span> February 10, 2022
                                                </li>
                                                <li class="post-card__meta-item"> <span class="dot"></span> 15 min Read</li>
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
                    </div>

                    <div class="col-xl-3 max-width side-sidebar">
                        <div class="theiaStickySidebar">
                            <!--widget-author-->
                            <div class="widget">
                                <div class="widget__author">
                                    <div class="widget__author-top">
                                        <a href="author.html" class="widget__author-link">
                                            <img src="{{ asset('/') }}website/assets/img/author/1.jpg" alt="" class="widget__author-img">
                                        </a>
                                    </div>
                                    <div class="widget__author-content">
                                        <h6 class="widget__author-name" > Hi, I'm David Smith</h6>
                                        <p class="widget__author-bio">
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

                            <!--widget-Latest-Posts-->
                            <div class="widget">
                                <h5 class="widget__title">Latest Posts</h5>
                                <ul class="widget__latest-posts">
                                    <!--post 1-->
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="post-default.html" class="widget__latest-posts-link">
                                                <img src="{{ asset('/') }}website/assets/img/latest/1.jpg" alt="..." class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">1</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="post-default.html" class="widget__latest-posts-link">5 Things I Wish I Knew Before Traveling to Malaysia</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15, 2022
                                            </small>
                                        </div>
                                    </li>

                                    <!--post 2-->
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="post-default.html" class="widget__latest-posts-link">
                                                <img src="{{ asset('/') }}website/assets/img/latest/2.jpg" alt="..." class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">2</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="post-default.html" class="widget__latest-posts-link">Everything you need to know about visiting the Amazon.</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15, 2022
                                            </small>
                                        </div>
                                    </li>

                                    <!--post 3-->
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="post-default.html" class="widget__latest-posts-link">
                                                <img src="{{ asset('/') }}website/assets/img/latest/3.jpg" alt="..." class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">3</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="post-default.html" class="widget__latest-posts-link">How to spend interesting vacation after hard work?</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15, 2022
                                            </small>
                                        </div>
                                    </li>

                                    <!--post 4-->
                                    <li class="widget__latest-posts__item">
                                        <div class="widget__latest-posts-image">
                                            <a href="post-default.html" class="widget__latest-posts-link">
                                                <img src="{{ asset('/') }}website/assets/img/latest/4.jpg" alt="..." class="widget__latest-posts-img">
                                            </a>
                                        </div>
                                        <div class="widget__latest-posts-count">4</div>
                                        <div class="widget__latest-posts__content">
                                            <p class="widget__latest-posts-title">
                                                <a href="post-default.html" class="widget__latest-posts-link">10 Best and Most Beautiful Places to Visit in Italy</a>
                                            </p>
                                            <small class="widget__latest-posts-date">
                                                <i class="bi bi-clock-fill widget__latest-posts-icon"></i>January 15, 2022
                                            </small>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!--widget-categories-->
                            <div class="widget">
                                <h5 class="widget__title">Categories</h5>
                                <ul class="widget__categories">
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">Livestyle</a>
                                        <span class="ml-auto widget__categories-number">22 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">travel</a>
                                        <span class="ml-auto widget__categories-number">25 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">food</a>
                                        <span class="ml-auto widget__categories-number">15 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">fashion</a>
                                        <span class="ml-auto widget__categories-number">18 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">interior</a>
                                        <span class="ml-auto widget__categories-number">21 Posts</span>
                                    </li>
                                    <li class="widget__categories-item">
                                        <a href="blog-grid.html" class="category widget__categories-link">art & design</a>
                                        <span class="ml-auto widget__categories-number">14 Posts</span>
                                    </li>



                                </ul>
                            </div>

                            <!--widget-instagram-->
                            <div class="widget">
                                <h5 class="widget__title">Instagram</h5>
                                <ul class="widget-instagram widget__instagram">
                                    <li class="widget__instagram-item">
                                        <a class="widget__instagram-link" href="#">
                                            <img src="{{ asset('/') }}website/assets/img/instagram/1.jpg" alt="" class="widget__instagram-img">
                                        </a>
                                    </li>

                                    <li class="widget__instagram-item">
                                        <a class="widget__instagram-link" href="#">
                                            <img src="{{ asset('/') }}website/assets/img/instagram/2.jpg" alt="" class="widget__instagram-img">
                                        </a>
                                    </li>
                                    <li class="widget__instagram-item">
                                        <a class="widget__instagram-link" href="#">
                                            <img src="{{ asset('/') }}website/assets/img/instagram/3.jpg" alt="" class="widget__instagram-img">
                                        </a>
                                    </li>

                                    <li class="widget__instagram-item">
                                        <a class="widget__instagram-link" href="#">
                                            <img src="{{ asset('/') }}website/assets/img/instagram/4.jpg" alt="" class="widget__instagram-img">
                                        </a>
                                    </li>
                                    <li class="widget__instagram-item">
                                        <a class="widget__instagram-link" href="#">
                                            <img src="{{ asset('/') }}website/assets/img/instagram/5.jpg" alt="" class="widget__instagram-img">
                                        </a>
                                    </li>
                                    <li class="widget__instagram-item">
                                        <a class="widget__instagram-link" href="#">
                                            <img src="{{ asset('/') }}website/assets/img/instagram/6.jpg" alt="" class="widget__instagram-img">
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <!--widget-tags-->
                            <div class="widget">
                                <h5 class="widget__title">Tags</h5>
                                <ul class="list-inline widget__tags">
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">Travel</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">nature</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">tips</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">forest</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">Torism</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">fashion</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">livestyle</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">health</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">food</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">breakfast</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">hacks</a>
                                    </li>
                                    <li class="widget__tags-item">
                                        <a href="blog-grid.html" class="widget__tags-link">interior</a>
                                    </li>
                                </ul>
                            </div>


                            <!--widget-ads-->
                            <div class="widget">
                                <h5  class="widget__title">ads</h5>

                                <div class="widget__ads">
                                    <a href="#" class="widget__ads-link">
                                        <img src="{{ asset('/') }}website/assets/img/ads/ads3.jpg" alt="" class="widget__ads-img">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!--/-->


        <!--newslettre-->
        @include('website.includes.body.newslettre')
    </main>

@endsection
