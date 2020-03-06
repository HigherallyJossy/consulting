<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta name="author" content="@yield('author')" />

    @yield("style")
</head>

<body>
    <div class="preloader" id="preloader"></div>
    <div id="page" class="page-wrapper header-sticky header-v1 hide-topbar-mobile header-sticky">

        @yield("content")
       
    </div>
    @include("frontend.includes.mobile-header")
    <div id="off-canvas-layer" class="off-canvas-layer"></div>

    @yield("scripts")

</body>

</html>
