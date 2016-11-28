<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
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
