<!DOCTYPE html>
<html>
    <head>
        <link href="{{ mix('css/app.css') }}" rel='stylesheet' type='text/css' />
        <link href="/css-temp/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/js-temp/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="/css-temp/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="online judge,onlinejudge,BasisOJ" />
        <link rel="shortcut icon" type="image/png" href="/images/logo.png">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <!-- <link href='http://fonts.css.network/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
    
        @section('head')
        <title>BasisOJ</title>
        @show
    </head>
    <body>
        <!-- header-section-starts -->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="/images/logo.png" class="img-responsive" alt="" width="110"/></a>
                </div>
                <div class="header-right">
                    <h4><i class="phone"></i></h4>
                    <span class="menu"></span>
                    <div class="top-menu">
                        <ul>                                              
                            <li><a href="{{ route('index') }}" id="/">首页</a></li>
                            <!-- class="active" -->
                            <li><a href="{{ route('problems.index') }}" id="/problems">题库</a></li>
                            <li><a href="{{ route('about') }}" id="/about">关于我们</a></li>
                            <li><a href="{{ route('services') }}" id="/services">进阶之旅</a></li>
                            <li><a href="{{ route('test') }}" id="/test">模拟测试</a></li>
                            <li><a href="{{ route('submissions.index') }}" id="/submissions">提交记录</a></li>
                            <li><a href="{{ route('home') }}" id="/home">个人中心</a></li>
                        </ul>
                    </div>
                    <!-- script for menu -->
                    <script>
                    var loc=window.location.pathname;
                    var dom=document.getElementById(loc);
                    dom.className+="active";
                    
                        $( "span.menu" ).click(function() {
                        $( ".top-menu" ).slideToggle( "slow", function() {
                            // Animation complete.
                        });
                        });
                    </script>
                <!-- script for menu -->

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--以上为表头--->
        @yield('content')
</html>
