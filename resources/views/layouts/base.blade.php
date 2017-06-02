<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/tether/1.3.6/css/tether.min.css" rel="stylesheet">
    <link href="{{mix('css/common.css')}}" rel="stylesheet">
    <!--[if IE]>
        <script src="https://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    < ![endif]-->
    @yield('css')
</head>
<body>
@include('layouts.top-navbar')
@yield('content')
@include('layouts.bottom-navbar')
<script src="https://cdn.bootcss.com/flat-ui/2.3.0/js/vendor/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/tether/1.3.6/js/tether.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-smoove/0.2.9/jquery.smoove.min.js"></script>
<script src="https://cdn.bootcss.com/vue/2.3.3/vue.min.js"></script>
<script type="text/javascript" src="{{mix('js/common.js')}}"></script>
@yield('js')
</body>
</html>