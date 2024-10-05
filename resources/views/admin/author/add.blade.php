@extends('admin.master')

@section('title')
    Add-Author
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
                            <li class="breadcrumb-item active" aria-current="page">Author Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add Author Form</h3></span>
                                <a href="{{ route('authors.index') }}" class="btn btn-primary ms-auto d-block">Manage Category</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('author.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Author Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="categoryName" name="name" placeholder="Enter author name" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="authorEmail" class="col-md-3 form-label">Author Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="email" placeholder="Enter new author email address" type="email">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="number" class="col-md-3 form-label">Author Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="number" placeholder="Enter new author number" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text"  name="description" cols="30" rows="10" placeholder="Enter new author description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Author Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="image" type="file">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="facebook" class="col-md-3 form-label">Facebook Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="facebook_url" placeholder="Enter author facebook_url link">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="instagram" class="col-md-3 form-label">Instagram Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="instagram_url" placeholder="Enter author instagram_url link">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="x-url" class="col-md-3 form-label">X Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="x_url" placeholder="Enter author x_url link">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="youtube" class="col-md-3 form-label">Youtube Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="youtube_url" placeholder="Enter author youtube_url link">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Create New Category</button>
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
