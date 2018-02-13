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
                                        <h1>ثبت نام</h1>
                                    </div><!-- /.page-title -->

                                    <h5>وارد حساب کاربری خود شوید</h5>

                                    <form id="register" method="post" action="{{url('register')}}">
                                        <div class="form-group">
                                            <label for="register-form-email">شماره تلفن همراه</label>
                                            <input type="text" class="form-control" name="email" id="email" required>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="register-form-password">جنسیت</label>
                                            <select name="gender" id="gender">
                                                <option value="0">زن</option>
                                                <option value="1">مرد</option>
                                            </select>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="register-form-name">رمز عبور</label>
                                            <input type="password" class="form-control" name="password" id="password" required>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="register-form-password">تکرار رمز عبور</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                                        </div><!-- /.form-group -->

                                        <div class="row">
                                            <div class="col-sm-4 pull-right">
                                                <button type="submit" class="btn btn-primary pull-right">ثبت نام</button>
                                            </div>
                                            {{--<div class="col-sm-8 pull-left">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember">
                                                    <label for="remember">قوانین سایت را مطالعه کرده ام.</label>
                                                </div>
                                            </div>--}}

                                        </div>

                                    </form>
                                    <div class="clearfix"></div>
                                </div>

                            </div>

                        </div><!-- /.col-sm-4 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div id="error"></div>
                    </div>

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
@endsection
