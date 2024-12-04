@extends('admin.master')

@section('title')

    Update-Post-Feature
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
                            <li class="breadcrumb-item active" aria-current="page">Post Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Update Post Form</h3></span>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Post Header-1</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="header1" placeholder="Please Inter First Header" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Post Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text" id="summernote" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">block Image</label>
                                        <div class="col-md-5">
                                            <input class="form-control" name="image" type="file">
                                            <img src="" class="image mt-4" height="300" width="400"/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Image Caption</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text" id="summernote1" name="caption"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="number" class="col-md-3 form-label">Post Header-2</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="header2" placeholder="Please Inter First Header" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Post Description-2</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text" rows="10" name="description2"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Post Title-2</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text" id="summernote2" name="title"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Short description-2</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text" rows="10" name="short_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="number" class="col-md-3 form-label">Post Header-3</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="header3" placeholder="Please Inter First Header" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Long Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text" id="summernote3" name="long_description"></textarea>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Update Abouts</button>
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
