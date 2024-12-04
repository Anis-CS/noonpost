<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <!-- META DATA -->
@include('admin.includes.meta')

<!-- TITLE -->
    <title>Noonpost - @yield('title')</title>

    <!-- FAVICON -->
    @include('admin.includes.style')

</head>

<body class="ltr app sidebar-mini">

    <!-- Switcher-->
    @include('admin.includes.right-sidebar')
    <!-- Switcher-->


    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('admin.includes.header')
            <!-- /app-Header -->

                <!--APP-SIDEBAR-->
            @include('admin.includes.left-sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            @yield('body')
            <!-- CONTAINER CLOSED -->
        </div>


        <!-- Country-selector modal-->
        @include('admin.includes.modal')


        <!-- FOOTER -->
        @include('admin.includes.footer')
        <!-- FOOTER CLOSED -->

    </div>
    <!-- page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
@include('admin.includes.script')

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote1').summernote();
            $('#summernote2').summernote();
            $('#summernote3').summernote();
        });
    </script>

</body>
</html>



