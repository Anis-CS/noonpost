<div class="slider slider--one">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($carousels as $carousel)
                <div class="slider__item  swiper-slide" style="background-image: url({{ asset($carousel->blog->image) }}">
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-8 m-auto">
                                <div class="slider__item-content">
                                    <a href="blog-grid.html" class="category">{{ $carousel->blog->category->name }}</a>
                                    <h1 class="slider__title">
                                        <a href="post-default.html" class="slider__title-link">{{ asset($carousel->blog->title) }}</a>
                                    </h1>
                                    <ul class="slider__meta list-inline">
                                        <li class="slider__meta-item">
                                            <a href="author.html" class="slider__meta-link">
                                                <img src="{{ asset($carousel->blog->author->image) }}" alt="" class="slider__meta-img">
                                            </a>
                                        </li>
                                        <li class="slider__meta-item "><a href="author.html" class="slider__meta-link">{{ $carousel->blog->author->name }}</a>
                                        </li>
                                        <li class="slider__meta-item">  <span class="dot"></span> February 10, 2024</li>
                                        <li class="slider__meta-item"> <span class="dot"></span> 15 min Read</li>
                                        <li class="slider__meta-item"> <span class="dot"></span> 2 comments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
