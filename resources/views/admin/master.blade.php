<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.includes.meta')

<!-- Favicon -->
    @include('admin.includes.style')
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">

    <!-- Sidebar Start -->
@include('admin.includes.left-sidebar')
<!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
    @include('admin.includes.header')
    <!-- Navbar End -->

    @yield('body')

    <!-- Footer Start -->
    @include('admin.includes.footer')
    <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
@include('admin.includes.script')
</body>

</html>
