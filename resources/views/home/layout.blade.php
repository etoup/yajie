<!DOCTYPE html>
<html lang="en">
    <head>
        @include('home.meta-tags')
        @yield('title')
        <meta name="description" content="{{ $meta_description }}">
        @include('home.index-css')
    </head>
    <body>
        @yield('content')
        @yield('unique-js')
    </body>
</html>
