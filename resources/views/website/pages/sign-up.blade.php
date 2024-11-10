@extends('website.master')

@section('title')
    Personal Blog HTML Template
@endsection

@section('body')

    <main class="main">
        <!--register-->
        <section class="m-top  mb-60">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="widget">
                            <h5 class="widget__title">Sign up</h5>
                            <form action="{{ route('customer.create') }}"  class="widget__form contact_form " method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control widget__form-input" placeholder="Username*" name="name" value="">
                                    @error('name')
                                     <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control widget__form-input" placeholder="Mobile Number*" name="phone" value="">
                                    @error('phone')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control widget__form-input" placeholder="Email Address*" name="email" value="">
                                    @error('email')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control widget__form-input" placeholder="Password*" name="password" value="">
                                    @error('password')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="widget__form-controls form-group">
                                    <div class="widget__form-controls-checkbox">
                                        <input type="checkbox" class="widget__form-controls-input" id="rememberMe">
                                        <label class="widget__form-controls-label" for="rememberMe">Agree to our <a href="#" class="widget__form-link">terms & conditions</a> </label>
                                    </div>
                                </div>
                                <div class="widget__form-btn">
                                    <button type="submit" class="btn-custom">Sign Up Now</button>
                                </div>
                                <p class="widget__form-text">Already have an account?
                                    <a href="{{ route('pages.login') }}" class="widget__form-link">Login</a>
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
