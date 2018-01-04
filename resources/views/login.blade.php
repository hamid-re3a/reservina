@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="page-title">
                                <h1>وارد شوید</h1>
                            </div><!-- /.page-title -->

                            <div class="row">

                                <div class="col-sm-6">

                                    <h5>هنوز ثبت نام نکرده اید؟ از اینجا ثبت نام کنید .</h5>

                                    <div class="btn-facebook-sign-iu">
                                        <a href="">
                                            <img src="{{url('assets/img/facebook.png')}}" alt="">
                                            <i>ورود از Facebook</i>
                                            <div class="clearfix"></div>
                                        </a>
                                    </div>

                                    <div class="btn-google-sign-iu">
                                        <a href="">
                                            <img src="{{url('assets/img/gplus.png')}}" alt="">
                                            <i>ورود از Google</i>
                                            <div class="clearfix"></div>
                                        </a>
                                    </div>

                                    <hr>

                                    <h5>رمز عبورتان را فراموش کرده اید؟</h5>

                                    <p>برای بازیابی رمز عبور اینجا کلیک کنید.</p>

                                </div>
                                <div class="col-sm-6">

                                    <h5>وارد حساب کاربری خود شوید</h5>

                                    <form method="post" action="http://preview.byaviators.com/template/superlist/login.html?">
                                        <div class="form-group">
                                            <label for="login-form-email">ایمیل یا شماره تلفن همراه</label>
                                            <input type="email" class="form-control" name="email" id="login-form-email">
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="login-form-password">رمز عبور</label>
                                            <input type="password" class="form-control" name="password" id="login-form-password">
                                        </div><!-- /.form-group -->

                                        <div class="row">
                                            <div class="col-sm-6 pull-right">
                                                <button type="submit" class="btn btn-primary pull-right">ورود به سایت</button>
                                            </div>
                                            <div class="col-sm-6 pull-left">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember">
                                                    <label for="remember">مرا بخاطر بسپار</label>
                                                </div>
                                            </div>

                                        </div>

                                    </form>
                                    <div class="clearfix"></div>
                                </div>

                            </div>

                        </div><!-- /.col-sm-4 -->
                    </div><!-- /.row -->

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
@endsection