@extends('admin.master')

@section('title')
    Blog Manage
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
                        <h1 class="page-title">Blog</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Form</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">All Blog</h3></span>
                                <p class="text-center text-success ms-auto">{{session('message')}}</p>
                                <a href="{{ route('blogs.create')}}" class="btn btn-primary ms-auto d-block">Add Blog</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Category Name</th>
                                            <th class="wd-15p border-bottom-0">Title</th>
                                            <th class="wd-15p border-bottom-0">Author Name</th>
                                            <th class="wd-15p border-bottom-0">Date</th>
                                            <th class="wd-25p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogs as $blog)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $blog->category->name }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->author->name }}</td>
                                                <td>{{ $blog->created_at }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm me-1 float-start">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary btn-sm me-1 float-start">
                                                        <i class="fa fa-info"></i>
                                                    </a>

                                                    <form  action="{{ route('blogs.destroy', $blog->id) }} " method="post">
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
