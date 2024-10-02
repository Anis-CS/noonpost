@extends('website.master')

@section('title')
    Personal Blog HTML Template
@endsection

@section('body')

    <main class="main">
        <!--Login-->
        <section class="m-top mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="widget">
                            <h5 class="widget__title">Login</h5>
                            <form  action="#" class="widget__form" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control widget__form-input" placeholder="Username*" name="username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control widget__form-input" placeholder="Password*" name="password" value="">
                                </div>
                                <div class="widget__form-controls form-group">
                                    <div class="widget__form-controls-checkbox">
                                        <input type="checkbox" class="widget__form-controls-input" id="rememberMe">
                                        <label class="widget__form-controls-label" for="rememberMe">Remember Me</label>
                                    </div>
                                    <a href="#" class="widget__form-link  ml-auto">Forgot Password?</a>
                                </div>

                                <div class="widget__form-btn">
                                    <button type="submit" class="btn-custom">Login Now</button>
                                </div>
                                <p class="widget__form-text">Don't have an account?<a href="signup.html" class="widget__form-link">Create One</a>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!--newslettre-->
        @include('website.includes.body.newslettre')
    </main>

@endsection





