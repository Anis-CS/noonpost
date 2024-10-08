@extends('admin.master')

@section('title')
    Author Manage
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
                        <h1 class="page-title">Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Author</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">All Auhtor</h3></span>
                                <p class="text-center text-success ms-auto">{{session('message')}}</p>
                                <a href="{{ route('author.add')}}" class="btn btn-primary ms-auto d-block">Add Author</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Author Name</th>
                                            <th class="wd-15p border-bottom-0">Email</th>
                                            <th class="wd-15p border-bottom-0">Number</th>
                                            <th class="wd-15p border-bottom-0">image</th>
                                            <th class="wd-25p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($authors as $author)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $author->name }}</td>
                                                <td>{{ $author->email }}</td>
                                                <td>{{ $author->number }}</td>
                                                <td>
                                                    <img src="{{ asset($author->image) }}" alt="" height="60" width="80">
                                                </td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('author.details', $author->id) }}" class="btn btn-primary btn-sm me-1 float-start">
                                                        <i class="fa fa-info"></i>
                                                    </a>

                                                    <form  action="{{ route('author.delete', $author->id) }} " method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this!!')">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
