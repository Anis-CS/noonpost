@extends('admin.master')

@section('title')
    Author Details
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
                        <h1 class="page-title">Manage Manage</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Author Details</h3>
                                <a href="{{ route('author.add') }}" class="btn btn-blue ms-auto d-block">Add Author</a>
                                <a href="{{ route('author.index') }}" class="btn btn-blue ms-auto d-block">->Back to</a>
                                <button class="ms-auto">
                                    <a href="{{route('author.edit', $author->id )}}" class="btn btn-success btn-sm ms-2">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @if($author->status==1)
                                        <a href="{{route('author.status', $author->id )}}" class="btn btn-danger float-start btn-sm">
                                            <i class="fa fa-eye-slash"></i>
                                        </a>
                                    @else
                                        <a href="{{route('author.status', $author->id )}}" class="btn btn-success float-start btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @endif

                                    <form action="{{ route('author.delete', $author->id ) }}"  method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure delete Product.'); ">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </button>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-danger">{{session('message') }}</p>
                                <table class="table table-bordered text-wrap w-100" id="responsive-table">
                                    <thead>
                                    <tr>
                                        <th class="bg-light">
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-4 form-label">Heading</label>
                                                        <label class="col-md-8 fs-4 form-label">
                                                            Information
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Author Id</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->id }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Author Name</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->name }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Author Email</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->email }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Author Number</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->number }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Description</label>
                                                        <label class="col-md-8 form-label">
                                                            {!! $author->description !!}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Author Image</label>
                                                        <label class="col-md-8 form-label">
                                                            <img src="{{ asset($author->image) }}" style="width: 100px; height:80px;">
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Facebook Url link</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->facebook_url }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Instagram Url link</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->instagram_url }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">X Url link</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->x_url }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Youtube Url link</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->youtube_url }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-1">
                                                    <div class="row">
                                                        <label for="" class="col-md-4 fs-6 form-label">Status</label>
                                                        <label class="col-md-8 form-label">
                                                            {{ $author->status==1 ? 'Published' : 'UnPublished' }}
                                                        </label>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>

@endsection
