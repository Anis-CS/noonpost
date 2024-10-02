<!doctype html>
<html lang="en">
<head>
    <!-- Meta -->
    @include('website.includes.meta')
    <!-- Title -->
    <title>NoonPost. - @yield('title') </title>
    <!--Stylesheets -->
    @include('website.includes.style')

</head>

<body>
    <!--loading -->
    <div class="loading">
        <div class="loading__circle"></div>
    </div>
    <!--/-->

    <!-- Header -->
    @include('website.includes.header')

    <!--main-->
    @yield('body')

    @include('website.includes.footer')

    <!--plugins -->
    @include('website.includes.script')

</body>

</html>
