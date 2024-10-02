<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\website\PostFeatureController;
use App\Http\Controllers\website\BlogsController;
use App\Http\Controllers\website\PagesController;

//Route::get('/', function () { return view('welcome'); });

Route::get('/',[WebsiteController::class,'index'])->name('home');

//....... post-features...........//
Route::get('/post-default',[PostFeatureController::class,'postDefault'])->name('post.default');
Route::get('/post-left-sidebar',[PostFeatureController::class,'leftSidebar'])->name('post.left-sidebar');
Route::get('/post-no-sidebar',[PostFeatureController::class,'noSidebar'])->name('post.no-sidebar');
Route::get('/post-video',[PostFeatureController::class,'postVideo'])->name('post.video');
Route::get('/post-audio',[PostFeatureController::class,'postAudio'])->name('post.audio');
Route::get('/post-gallery',[PostFeatureController::class,'postGallery'])->name('post.gallery');

//........blogs ............//
Route::get('/blogs-grid',[BlogsController::class,'blogGrid'])->name('blogs.grid');
Route::get('/blogs-masonry',[BlogsController::class,'blogMasonry'])->name('blogs.masonry');
Route::get('/blogs-list',[BlogsController::class,'blogList'])->name('blogs.list');
Route::get('/blogs-classic',[BlogsController::class,'blogClassic'])->name('blogs.classic');

//.......pages ............//
Route::get('/pages-author',[PagesController::class,'author'])->name('pages.author');
Route::get('/pages-about',[PagesController::class,'about'])->name('pages.about');
Route::get('/pages-contact',[PagesController::class,'contact'])->name('pages.contact');
Route::get('/pages-login',[PagesController::class,'login'])->name('pages.login');
Route::get('/pages-sign-up',[PagesController::class,'signUp'])->name('pages.sign-up');
Route::get('/pages-404',[PagesController::class,'pages404'])->name('pages.pages404');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

});
