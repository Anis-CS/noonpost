@extends('admin.master')

@section('title')
    Edit-Author
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
                                <span><h3 class="card-title">Update Author Form</h3></span>
                                <a href="{{ route('author.index') }}" class="btn btn-primary ms-auto d-block">Manage Author</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('author.update',['id'=>$author->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="authorName" class="col-md-3 form-label">Author Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="name" value="{{ $author->name }}" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="authorEmail" class="col-md-3 form-label">Author Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="email" value="{{ $author->email }}" type="email">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="number" class="col-md-3 form-label">Author Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="number" value="{{ $author->number }}" type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-md-3 form-label">Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text"  name="description" cols="30" rows="10">{{ $author->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Author Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="image" type="file" accept="image/*">
                                            <img src="{{ asset($author->image) }}" alt="" height="100" width="120">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="facebook" class="col-md-3 form-label">Facebook Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="facebook_url" value="{{ $author->facebook_url }}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="instagram" class="col-md-3 form-label">Instagram Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="instagram_url" value="{{ $author->instagram_url }}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="x-url" class="col-md-3 form-label">X Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="x_url" value="{{ $author->x_url }}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="youtube" class="col-md-3 form-label">Youtube Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="youtube_url" value="{{ $author->youtube_url }}">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Update Author Info</button>
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
