<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>رزروینا - سیستم مدیریت رزرو آنلاین</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{url('favicon.ico')}}">

    <link href="{{url('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('plugins/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('plugins/bootstrap-fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('dist/css/superlist.css')}}" rel="stylesheet" type="text/css" >
</head>


<body class="">

<div class="page-wrapper">

    <header class="header">
        <div class="header-wrapper">
            <div class="container">
                <div class="header-inner">

                    <div class="header-content">
                        <div class="header-top">

                            <ul class="header-nav-secondary nav nav-pills">
                                @if(Auth::check())
                                    {{--<li>{{Auth::user()->id}}</li>--}}
                                    <li><a href="{{url('logout')}}">خروج</a></li>
                                @else
                                <li><a href="{{url('login')}}">ورود</a></li>
                                <li><a href="{{url('register')}}">ثبت نام</a></li>
                                @endif
                            </ul>
                        </div><!-- /.header-top -->

                        <div class="header-bottom">


                            <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                                <li class="active">
                                    <a href="{{url('/')}}">صفحه اصلی</a>
                                </li>

                                <li >
                                    <a href="{{url('blog')}}">وبلاگ</a>
                                </li>

                                <li >
                                    <a href="{{url('contact')}}">ارتباط با ما</a>
                                </li>

                                <li >
                                    <a href="{{url('search')}}">جستجوی پیشرفته</a>
                                </li>

                            </ul>

                            <div class="hero-image-keyword header-search">
                                <input type="text" class="form-control" placeholder="جستجو مشاغل">
                            </div><!-- /.header-search -->

                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div><!-- /.header-bottom -->
                    </div><!-- /.header-content -->

                    <div class="header-logo">
                        <a href="{{url('/')}}">
                            <img src="{{url('dist/img/logo.png')}}" alt="Logo">

                        </a>
                    </div><!-- /.header-logo -->

                </div><!-- /.header-inner -->
            </div><!-- /.container -->
        </div><!-- /.header-wrapper -->
    </header><!-- /.header -->


    @yield('content')


    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <h2>لورم ایپسوم یا طرح‌نما</h2>

                        <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>
                    </div>

                    <div class="col-sm-3">
                        <h2>پر بازدیدترین ها</h2>

                        <div class="thumbs-gallery">
                            <a class="thumbBox" rel="lightbox-thumbs" href="/assets/img/thumbsgallery/image01.jpg">
                                <img src="/assets/img/thumbsgallery/thumbs/image01.jpg" alt="image1.jpg">
                                <i style="opacity: 0;"></i>
                            </a>
                        </div>
                        <div class="clearfix"></div>

                    </div>

                    <div class="col-sm-3">
                        <h2>اطلاعات تماس</h2>
                        <p> شماره تلفن : 57-72-938-0936<br>ایمیل : <a href="#">info@reservina.ir</a></p>

                        <p>ما را در شبکه های اجتماعی دنبال کنید</p>
                        <ul class="social-links nav nav-pills">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>

                    </div>

                    <div class="col-sm-3">
                        <h2>رزروینا</h2>
                        
                        <ul class="faq-list">
                            <li><a href="{{url('faq')}}">چطور استفاده کنم؟</a></li>
                            <li><a href="{{url('faq')}}">چطور از رزروها مطمئن باشم؟</a></li>
                            <li><a href="{{url('faq')}}">آرایشگاهتان را به کاربران نشان دهید.</a></li>
                        </ul>
                        
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-left">این وبسایت کُلِش ماس ماس.</div>

                <div class="footer-bottom-right">
                    <ul class="nav nav-pills">
                        <li><a href="{{url('/')}}">خانه</a></li>
                        <li><a href="{{url('blog')}}">وبلاگ</a></li>
                        <li><a href="{{url('contact')}}">ارتباط با ما</a></li>
                        <li><a href="{{url('faq')}}">سوالات متداول</a></li>
                    </ul><!-- /.nav -->
                </div><!-- /.footer-bottom-right -->
            </div><!-- /.container -->
        </div>
    </footer><!-- /.footer -->

</div><!-- /.page-wrapper -->

<script src="{{url('plugins/jquery/jquery.js')}}" type="text/javascript"></script>
<script src="{{url('plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{url('plugins/moment/moment.min.js')}}" type="text/javascript"></script>
<script src="{{url('plugins/colorbox/jquery.colorbox-min.js')}}" type="text/javascript"></script>
<script src="{{url('plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{url('plugins/flot/jquery.flot.spline.js')}}" type="text/javascript"></script>
<script src="{{url('plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{url('plugins/owl.carousel/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{url('plugins/bootstrap-fileinput/fileinput.min.js')}}" type="text/javascript"></script>

<script src="{{url('dist/js/superlist.js')}}" type="text/javascript"></script>
<script src="{{url('dist/js/app.js')}}" type="text/javascript"></script>

@yield('script')

</body>
</html>