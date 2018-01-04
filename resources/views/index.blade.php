@extends('layouts.app')

@section('content')




    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-80">
                    <div class="hero-image">
                        <div class="hero-image-inner" style="background-image: url('assets/img/tmp/slider-large-4.jpg');">
                            <div class="hero-image-content">
                                <div class="container">
                                    <h1>به رزروینا خوش آمدید</h1>

                                    <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، <br> صفحه‌آرایی و طراحی گرافیک گفته می‌شود.</p>

                                    <a href="{{url('register-business')}}" class="btn btn-secondary btn-lg">ثبت آرایشگاه</a>
                                </div><!-- /.container -->
                            </div><!-- /.hero-image-content -->

                            <div class="hero-image-form-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4 col-lg-4">
                                            <form method="get" action="http://preview.byaviators.com/template/superlist/index-image.html?">
                                                <h2>جستجو کنید</h2>

                                                <div class="hero-image-keyword form-group">
                                                    <input type="text" class="form-control" placeholder="سرویس">
                                                </div><!-- /.form-group -->

                                                <div class="hero-image-location form-group">
                                                    <select class="form-control" title="موقعیت">
                                                        <option>Bronx</option>
                                                        <option>Brooklyn</option>
                                                        <option>Manhattan</option>
                                                        <option>Staten Island</option>
                                                        <option>Queens</option>
                                                    </select>
                                                </div><!-- /.form-group -->

                                                <div class="hero-image-category form-group">
                                                    <select class="form-control" title="دسته بندی">
                                                        <option value="">Automotive</option>
                                                        <option value="">Jobs</option>
                                                        <option value="">Nightlife</option>
                                                        <option value="">Services</option>
                                                    </select>
                                                </div><!-- /.form-group -->

                                                <div class="hero-image-price form-group">
                                                    <input type="text" class="form-control" placeholder="حداقل قیمت">
                                                </div><!-- /.form-group -->

                                                <button type="submit" class="btn btn-primary btn-block">جستجو</button>
                                            </form>
                                        </div><!-- /.col-* -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div><!-- /.hero-image-form-wrapper -->
                        </div><!-- /.hero-image-inner -->
                    </div><!-- /.hero-image -->

                </div>

                <div class="container">

                    <div class="page-header">
                        <h1>لورم ایپسوم یا طرح‌نما</h1>
                        <p>لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند..</p>
                    </div><!-- /.page-header -->

                </div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

@endsection
