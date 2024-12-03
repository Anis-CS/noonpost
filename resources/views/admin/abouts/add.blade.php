@extends('admin.master')

@section('title')

    Add-about
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
                            <li class="breadcrumb-item active" aria-current="page">About Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add About Form</h3></span>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">About Image</label>
                                        <div class="col-md-5">
                                            <input class="form-control" name="image" type="file">
                                            <img src="" class="image mt-4" height="300" width="400"/>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="blogEmail" class="col-md-3 form-label">Long Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text" id="summernote" name="long_description" placeholder="Enter new About long description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="number" class="col-md-3 form-label">About title</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text"  name="title" id="summernote1" placeholder="Enter new title" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="number" class="col-md-3 form-label">Short des</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" type="text" name="short_description" id="summernote2" placeholder="Enter short description" ></textarea>
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
