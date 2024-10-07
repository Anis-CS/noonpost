@extends('admin.master')

@section('title')
    Add-blog
@endsection

@section('body')

    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Form Layouts</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add blog Form</h3></span>
                                <a href="{{ route('blogs.index') }}" class="btn btn-primary ms-auto d-block">Manage blog</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Category name</label>
                                        <div class="col-md-9">
                                            <select name="category_id" class="form-control">
                                                <option>Select A Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Blog title</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="title" placeholder="Enter new blog title address" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="number" class="col-md-3 form-label">Short Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text"  name="short_description" cols="30" rows="10" placeholder="Enter new blog description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Long Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text"  name="long_description" cols="30" rows="10" placeholder="Enter new blog description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">blog Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="image" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="authorName" class="col-md-3 form-label">Author name</label>
                                        <div class="col-md-9">
                                            <select name="author_id" class="form-control">
                                                <option>Select A Author</option>
                                                @foreach($authors as $author)
                                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="facebook" class="col-md-3 form-label">Audio Record link</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="audio_url" placeholder="Enter blog Audio video link">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="instagram" class="col-md-3 form-label">Video Record link</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="video_url" placeholder="Enter blog Video link">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Create New Blog</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->

            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->

@endsection
