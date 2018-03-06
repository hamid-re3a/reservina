@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="row">

                                <div class="col-sm-6 pull-right">

                                    <div class="page-title">
                                        <h1>وارد شوید</h1>
                                    </div><!-- /.page-title -->

                                    <h5>وارد حساب کاربری خود شوید</h5>

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            {{$errors->first()}}
                                        </div>
                                    @endif

                                    <form method="post" action="{{url('login')}}" id="login">
                                        <div class="form-group">
                                            <label for="login-form-email">شماره تلفن همراه</label>
                                            <input type="text" class="form-control" name="username" id="username">
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="login-form-password">رمز عبور</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div><!-- /.form-group -->

                                        <div class="row">
                                            <div class="col-sm-6 pull-right">
                                                <button type="submit" class="btn btn-primary pull-right">ورود به سایت</button>
                                            </div>
                                            <div class="col-sm-6 pull-left">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember" name="remember">
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