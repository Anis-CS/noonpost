<header class="header fixed-top navbar-expand-xl">
    <div class="container-fluid">
        <div class="header__main">
            <!-- logo -->
            <div class="logo">
                <a class="logo__link logo--dark" href="{{ route('home') }}">
                    <img src="{{ asset('/') }}website/assets/img/logo/logo-dark.png" alt="" class="logo__img">
                </a>
                <a class="logo__link logo--light" href="{{ route('home') }}">
                    <img src="{{ asset('/') }}website/assets/img/logo/logo-white.png" alt="" class="logo__img">
                </a>
            </div><!--/-->

            <div class="header__navbar">
                <nav class="navbar">
                    <!--navbar-collapse-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <!--Homes -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}"> home </a>
                            </li>

                            <!--Posts features -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('post.default')}}">Post feature </a>
                            </li>
{{--                             <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Post features</a>--}}
{{--                                <ul class="dropdown-menu ">--}}
{{--                                    <li><a class="dropdown-item " href="{{route('post.default')}}">post default </a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('post.left-sidebar')}}">post left sidebar </a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('post.no-sidebar')}}">post no sidebar</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('post.video')}}">post video </a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('post.audio')}}">post audio </a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{route('post.gallery')}}">post gallery </a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

                            <!--Blogs-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blogs.masonry') }}">blogs</a>
                            </li>

{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link  dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false"> blogs </a>--}}
{{--                                <ul class="dropdown-menu ">--}}
{{--                                    <li><a class="dropdown-item " href="{{ route('blogs.grid') }}">Blog grid</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{ route('blogs.masonry') }}">Blog masonry</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{ route('blogs.list') }}">Blog list</a></li>--}}
{{--                                    <li><a class="dropdown-item" href="{{ route('blogs.classic') }}">Blog classic</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

                            <!--Pages-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages.about') }}"> about us </a>
                            </li>

                            <!--contact -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages.contact') }}"> contact </a>
                            </li>

                            @if(Session::get('customer_id'))
                                <li class="nav-item dropdown">
                                    <a href="" data-bs-toggle="dropdown"><i class="fa fa-user"></i> {{ Session::get('customer_name') }}</a>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li><a href="{{ route('customer.dashboard') }}" class="dropdown-item">Dashboard</a></li>
                                        <li><a href="{{ route('customer.logout') }}" class="dropdown-item">logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item" onclick="openAccount()">
                                    <a class="nav-link" href="{{ route('pages.login') }}"> login </a>
                                    <a class="nav-link" href="{{ route('pages.sign-up') }}"> Sign-Up </a>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <!--/-->
                </nav>

            </div>


            <!-- header actions -->
            <div class="header__action-items">
                <!--header-social-->
                <ul class="list-inline social-media social-media--layout-one">
                    <li class="social-media__item">
                        <a href="#" class="social-media__link" >
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>

                    <li class="social-media__item">
                        <a href="#" class="social-media__link">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li class="social-media__item">
                        <a href="#" class="social-media__link"><i class="bi bi-twitter-x"></i></a>
                    </li>
                    <li class="social-media__item">
                        <a href="#" class="social-media__link"><i class="bi bi-youtube"></i></a>
                    </li>
                </ul>

                <!--theme-switch-->
                <div class="theme-switch">
                    <label class="theme-switch__label" for="checkbox">
                        <input type="checkbox" id="checkbox" class="theme-switch__checkbox">
                        <span class="theme-switch__slider round ">
                                <i class="bi bi-sun icon-light theme-switch__icon theme-switch__icon--light"></i>
                                <i class="bi bi-moon icon-dark theme-switch__icon theme-switch__icon--dark"></i>
                            </span>
                    </label>
                </div>

                <!--search-icon-->
                <div class="search-icon">
                    <a href="#search" class="search-icon__link">
                        <i class="bi bi-search search-icon__icon"></i>
                    </a>
                </div>

                <!--navbar-toggler-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler__icon"></span>
                </button>

            </div>
        </div>
    </div>
</header>


<!-- -->
