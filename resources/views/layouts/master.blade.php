<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Basic Page Needs
    ================================================== -->
    <title>@yield('title') - Byarent platform</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/template/css/colors/red.css') }}" id="colors">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" id="colors">

    @include('sections.fonts')

</head>

<body>
<!-- Wrapper -->
<div id="wrapper" style="@yield('wrapper-style')">
    <!-- Header Container
    ================================================== -->
    @include('sections.top-nav')
    <!-- Header Container / End -->

    <!-- Banner
    ================================================== -->
    @yield('before-content')

    <!-- Content
    ================================================== -->
    @yield('content')

    <!-- Footer
    ================================================ -->
    @include('sections.footer')

</div>
<!-- Wrapper / End -->
</body>
</html>
