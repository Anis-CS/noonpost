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
                                <img src="{{ asset('/') }}website/assets/img/pic/about-us.jpg" alt="" class="about-us__img">
                            </div>
                            <div class="about-us__description">
                                <p class="about-us__description-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                    perferendis minima accusamus aliquam reprehenderit autem
                                </p>
                                <p class="about-us__description-text">
                                    praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                    perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                                </p>
                                <p class="about-us__description-text">
                                    praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                    perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                                </p>
                                <div class="about-us__qoute">
                                    <i class="bi bi-quote about-us__qoute-icon"></i>

                                    <h3 class="about-us__qoute-item">
                                        "My website’s kind of fun for me. I get to do drawings on that.
                                        It’s kind of fun.”
                                    </h3>
                                    <small class="about-us__qoute-author">Jeff Bridges.</small>
                                </div>
                                <p class="about-us__description-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor
                                    quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum.
                                    Interdum malesuada fames ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. cursus leo ultricies
                                    magna faucibus id.
                                </p>
                                <p class="about-us__description-text">
                                    praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                    perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
                                </p>
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
