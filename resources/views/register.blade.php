@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="page-title">
                                <h1>ثبت نام</h1>
                            </div><!-- /.page-title -->

                            <div class="row">

                                <div class="col-sm-6">

                                    <h5>آیا از قبل عضو بوده اید اینجا کلیک کنید</h5>

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

                                </div>
                                <div class="col-sm-6">

                                    <h5>وارد حساب کاربری خود شوید</h5>

                                    <form method="post" action="http://preview.byaviators.com/template/superlist/login.html?">
                                        <div class="form-group">
                                            <label for="register-form-email">ایمیل یا شماره تلفن همراه</label>
                                            <input type="email" class="form-control" name="email" id="register-form-email">
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="register-form-name">نام</label>
                                            <input type="name" class="form-control" name="name" id="register-form-name">
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="register-form-password">رمز عبور</label>
                                            <input type="password" class="form-control" name="password" id="register-form-password">
                                        </div><!-- /.form-group -->

                                        <div class="row">
                                            <div class="col-sm-4 pull-right">
                                                <button type="submit" class="btn btn-primary pull-right">ثبت نام</button>
                                            </div>
                                            <div class="col-sm-8 pull-left">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember">
                                                    <label for="remember">قوانین سایت را مطالعه کرده ام.</label>
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