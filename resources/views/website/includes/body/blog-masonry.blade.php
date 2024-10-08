<section class="mt-90">
    <div class="container-fluid">
        <div class="row masonry-items">
            <!--Post-1-->
            @foreach($blogs as $blog)
                <div class="col-xl-4 col-lg-6 col-md-6 masonry-item">
                <div class="post-card post-card--default">
                    <div class="post-card__image">
                        <a href="post-default.html" >
                            <img src="{{ asset($blog->image) }}" alt="">
                        </a>
                    </div>

                    <div class="post-card__content">
                        <a href="blog-grid.html" class="category">{{ $blog->category->name }}</a>
                        <h5 class="post-card__title">
                            <a href="post-default.html" class="post-card__title-link">{{ $blog->title }}</a>
                        </h5>
                        <p class="post-card__exerpt">{!! $blog->long_description !!}
                        </p>

                        <ul class="post-card__meta list-inline">
                            <li class="post-card__meta-item">
                                <a href="author.html" class="post-card__meta-link">
                                    <img src="{{ asset($blog->author->image) }}" alt="author-img" class="post-card__meta-img">
                                </a>
                            </li>
                            <li class="post-card__meta-item ">
                                <a href="author.html" class="post-card__meta-link">{{ $blog->author->name }}</a>
                            </li>
                            <li class="post-card__meta-item">
                                <span class="dot"></span> {{($blog->created_at)->isoFormat('MMM Do YYYY')}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <!--/-->
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
