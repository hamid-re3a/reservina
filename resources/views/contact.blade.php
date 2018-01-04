@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">

                    <div class="document-title">
                        <h1>ارتباط با ما</h1>

                    </div><!-- /.document-title -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contact-form-wrapper clearfix">
                                <form class="contact-form" method="post" action="http://preview.byaviators.com/template/superlist/contact-3.html?">
                                    <div class="form-group">
                                        <label for="contact-form-name">نام</label>
                                        <input type="text" name="name" id="contact-form-name" class="form-control">
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="contact-form-subject">عنوان</label>
                                        <input type="text" name="subject" id="contact-form-subject" class="form-control">
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="contact-form-email">ایمیل</label>
                                        <input type="text" name="email" id="contact-form-email" class="form-control">
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="contact-form-message">پیام</label>
                                        <textarea class="form-control" id="contact-form-message" rows="6"></textarea>
                                    </div><!-- /.form-group -->

                                    <button class="btn btn-primary pull-right">ارسال پیام</button>
                                </form><!-- /.contact-form -->
                            </div><!-- /.contact-form-wrapper -->
                        </div>

                        <div class="col-sm-6">
                            <h3>نظر، انتقاد و پیشنهاداتان را با ما به اشتراک بگذارید.</h3>

                            <p>
                                تیم رزروینا متشکل از نیروی کاری جوان و کوشا تلاش خود را برای جلب رضایت مردم عزیز سرزمینمان ایران به کار بسته است. ما را با ارسال نظرات خود را در پیشبرد کار یاری نمایید. همچنین شما میتوانید از طریق ایمیل و شبکه های اجتماعی که در پایین صفحه آمده با ما در ارتباط باشید
                            </p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>آدرس</h3>

                                    <p>
                                        13/2 Elizabeth Street,<br>
                                        Melbourne, Australia
                                    </p>
                                </div><!-- /.col-* -->

                                <div class="col-sm-6">
                                    <h3>اطلاعات تماس</h3>
                                    <p>
                                        1900-CO-WORKER<br>
                                        1800-3322-4453
                                    </p>
                                </div><!-- /.col-* -->
                            </div><!-- /.row -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
@endsection