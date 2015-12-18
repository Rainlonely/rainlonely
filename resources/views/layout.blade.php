<!DOCTYPE html>
<html>
<head>
    <title>RAINLONELY</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="我真不是装逼,高逼格,天生的">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-76x76.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link href="{{ asset('images/apple-touch-icon-120x120.png') }}" rel="apple-touch-icon" sizes="120x120">
    <link href="{{ asset('images/apple-touch-icon-152x152.png') }}" rel="apple-touch-icon" sizes="152x152">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/articlelist.min.css') }}">
    <meta name="keywords" content="前端开发,Rain,吴睿">
    <meta name="baidu-site-verification" content="W7el1NQoo9" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-71200877-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
<header id="header" class="header-bar clearfix">
    <div class="pull-left">
        <h1>
            <a href="/contact" title="Rainlonely">Rainlonely</a>
            <i class="fa fa-"></i>
            <span>Life is a gift</span>
        </h1>
    </div>
    <div class="pull-right">
        <div class="search-box">
            <i class="fa fa-search"></i>
        </div>
        <div class="nav-box fa fa-bars"></div>
    </div>
</header><!-- /header -->
    @yield('content')
<script src="{{ asset('dist/js/jquery.min.js') }}" ></script>
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('dist/js/imagesloaded.pkgd.min.js') }}"></script>
<script>
    $(document).ready(function(){
        var $grid = $('.grid').imagesLoaded(function() {
            $grid.isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-sizer'
                }
            });
        });
    })
</script>
</body>
</html>