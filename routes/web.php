<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\website\BlogsController;
use App\Http\Controllers\website\PagesController;
use App\Http\Controllers\website\PostFeatureController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\AuthorController;
use App\Http\Controllers\admin\CarouselController;
use App\Http\Controllers\website\CustomerController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\PostController;

//Route::get('/', function () { return view('welcome'); });

Route::get('/',[WebsiteController::class,'index'])->name('home');

//....... post-features route...........//
Route::get('/post-default',[PostFeatureController::class,'postDefault'])->name('post.default');

//Route::get('/post-left-sidebar',[PostFeatureController::class,'leftSidebar'])->name('post.left-sidebar');
//Route::get('/post-no-sidebar',[PostFeatureController::class,'noSidebar'])->name('post.no-sidebar');
//Route::get('/post-video',[PostFeatureController::class,'postVideo'])->name('post.video');
//Route::get('/post-audio',[PostFeatureController::class,'postAudio'])->name('post.audio');
//Route::get('/post-gallery',[PostFeatureController::class,'postGallery'])->name('post.gallery');

//........blogs route............//
Route::get('/blogs-masonry',[BlogsController::class,'blogMasonry'])->name('blogs.masonry');

//Route::get('/blogs-grid',[BlogsController::class,'blogGrid'])->name('blogs.grid');
//Route::get('/blogs-list',[BlogsController::class,'blogList'])->name('blogs.list');
//Route::get('/blogs-classic',[BlogsController::class,'blogClassic'])->name('blogs.classic');

//.......pages route............//
Route::get('/about',[PagesController::class,'about'])->name('pages.about');
Route::get('/author-info',[PagesController::class,'author'])->name('author');
Route::get('/author-info/{id}',[PagesController::class,'authorInfo'])->name('author.info');
Route::get('/contact',[PagesController::class,'contact'])->name('pages.contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/customer-login',[PagesController::class,'login'])->name('pages.login');
Route::get('/sign-up',[PagesController::class,'signUp'])->name('pages.sign-up');
Route::get('/pages404',[PagesController::class,'pages404'])->name('pages.pages404');

// ...............Customer Route.............//
Route::post('/customer-save',[CustomerController::class, 'store'])->name('customer.create');
Route::get('/customer/dashboard',[CustomerController::class,'customerDashboard'])->name('customer.dashboard');
Route::post('/customer/login',[CustomerController::class,'customerLoginCheck'])->name('customer.login');
Route::get('/customer/logout',[CustomerController::class,'logout'])->name('customer.logout');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

//    Route::get('/dashboard', function () {return view('dashboard'); })->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::resources([
        'categories'    =>  BlogCategoryController::class,
        'blogs'         =>  BlogController::class,
        'abouts'        =>  AboutController::class,
        'posts'         =>  PostController::class,
    ]);
    Route::get('/blog-status/{id}',[BlogController::class,'status'])->name('blogs.status');

    //------Author Controller --------//
    Route::get('/author-add',[AuthorController::class,'create'])->name('author.add');
    Route::get('/author-manage',[AuthorController::class,'index'])->name('author.index');
    Route::post('/author-save',[AuthorController::class,'store'])->name('author.store');
    Route::get('/author-edit/{id}',[AuthorController::class,'edit'])->name('author.edit');
    Route::post('/author-update/{id}',[AuthorController::class,'update'])->name('author.update');
    Route::get('/author-details/{id}',[AuthorController::class,'show'])->name('author.details');
    Route::get('/author-status/{id}',[AuthorController::class,'status'])->name('author.status');
    Route::post('/author-delete/{id}',[AuthorController::class,'destroy'])->name('author.delete');

    //-------- Carousel Controller------//
    Route::get('/carousel',[CarouselController::class, 'index'])->name('carousel');

//    Route::get('/carousel-add',[CarouselController::class, 'create'])->name('carousel.create');
//    Route::post('/carousel-save',[CarouselController::class, 'store'])->name('carousel.store');
    Route::get('/carousel-edit/{id}',[CarouselController::class, 'edit'])->name('carousel.edit');
    Route::post('/carousel-update/{id}',[CarouselController::class, 'update'])->name('carousel.update');
    Route::get('/carousel-status/{id}',[CarouselController::class, 'status'])->name('carousel.show');

});
