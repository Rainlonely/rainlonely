<!DOCTYPE html>
<html>
<head>
    <title>RAINLONELY</title>

    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="我真不是装逼,高逼格,天生的">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-76x76.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link href="{{ asset('images/apple-touch-icon-120x120.png') }}" rel="apple-touch-icon" sizes="120x120">
    <link href="{{ asset('images/apple-touch-icon-152x152.png') }}" rel="apple-touch-icon" sizes="152x152">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    {{--<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">--}}
    <meta name="keywords" content="前端开发,Rain,吴睿">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-71200877-1', 'auto');
        ga('send', 'pageview');
    </script>
    <style>
        body{
            height:100%;
            overflow: hidden;
        }
        .wrap{
            position: absolute;
            left: 0;
            width: 320px;
            text-align: center;
            top: 50%;
            left: 50%;
            margin-left: -160px;
            margin-top: -160px;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        h1{
            font-size: 30pt;
            letter-spacing: .12em;
        }
        p{
            font-weight: bolder;
            color: #999;
            letter-spacing: .12em;
        }
        ul{
            list-style: none;
            padding: 0;
        }
        li{
            color: #999;
            padding: 10px 0;
            letter-spacing: .12em;
        }
        li:hover{
            color: #555;
        }
        li:hover a{color: #555;}
        a{
            text-decoration: none;
            color: #999;
        }
        canvas{
            position: absolute;
            left: 0;
            top:0;
            z-index: -1;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        .btn-fa-send{
            background-color:rgba(146,168,209,.85);
            color: #fff;
            font-size: 2em;
            width: 50px;
            height:50px;
            line-height: 50px;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 0 5px #888;
            position: fixed;
            bottom: 5%;
            right:5%;
        }
        #commentForm{
            padding: 10%;
            background-color: rgb(247,202,201);
            position: absolute;
            bottom: -257px;
            border-radius: 10px 10px 0 0;
            box-shadow: 0px -2px 5px #888;
            transition: bottom .3s ease-out;
        }
        .form-control{opacity: .85;}
        textarea.form-control{
            height: 80px;
        }
        .btn-primary{
            background-color:rgba(146,168,209,1);
            border-color: transparent;
        }

    </style>
</head>
<body>
@yield('content')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{--<script src="{{ asset('bower_components/tether/dist/js/tether.min.js') }}"></script>--}}
{{--<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>--}}
<script>
    $(document).ready(function(){
        $('.btn-fa-send').on('click',function(){
            $('#commentForm').css('bottom','0');
        });
    });
</script>
</body>
</html>