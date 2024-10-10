@extends('admin.master')

@section('title')
    Add-Carousel
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
                            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Update Carousel Form</h3></span>
                                <a href="{{ route('carousel') }}" class="btn btn-primary ms-auto d-block">Manage Carousel</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('carousel.update', [ 'id'=>$carousel->id ]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="carousel" class="col-md-3 form-label">Update Blog Name</label>
                                        <div class="col-md-9">
                                            <select  name="blog_id" data-placeholder="Select Blog Name" class="form-control select2" >
                                                <option disabled>Select A Blog</option>
                                                @foreach($blogs as $blog)
                                                    <option value="{{ $blog->id }}"{{ $carousel->blog_id == $blog->id ? 'selected': '' }}>{{ $blog->category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Update Carousel Blog</button>
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
