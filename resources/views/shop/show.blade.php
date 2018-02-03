@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-80 mb80">
                    <div class="detail-banner" style="background-image: url(/assets/img/tmp/slider-large-4.jpg);">
                        <div class="container">
                            <div class="detail-banner-left">
                                <h2 class="detail-title">{{$shop->alias}}</h2>

                                <div class="detail-banner-address">
                                    <i class="fa fa-map-o"></i> {{$shop->work_address}}
                                </div><!-- /.detail-banner-address -->

                                <div class="detail-banner-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div><!-- /.detail-banner-rating -->

                                <div class="detail-banner-btn bookmark">
                                    <i class="fa fa-bookmark-o"></i> <span data-toggle="Bookmarked">نشان کردن</span>
                                </div><!-- /.detail-claim -->

                                <div class="detail-banner-btn heart">
                                    <i class="fa fa-heart-o"></i> <span data-toggle="I Love It">دنبال کردن</span>
                                </div><!-- /.detail-claim -->

                            </div><!-- /.detail-banner-left -->
                        </div><!-- /.container -->
                    </div><!-- /.detail-banner -->

                </div>

                <div class="container">
                    <div class="row detail-content">
                        <div class="col-sm-7">
                            <div class="detail-gallery">
                                <div class="detail-gallery-preview">
                                    <a href="/assets/img/tmp/gallery-1.jpg">
                                        <img src="/assets/img/tmp/gallery-1.jpg">
                                    </a>
                                </div>

                                <ul class="detail-gallery-index">
                                    <li class="detail-gallery-list-item active">
                                        <a data-target="/assets/img/tmp/gallery-1.jpg">
                                            <img src="/assets/img/tmp/gallery-1.jpg" alt="...">
                                        </a>
                                    </li>
                                    <li class="detail-gallery-list-item active">
                                        <a data-target="/assets/img/tmp/gallery-2.jpg">
                                            <img src="/assets/img/tmp/gallery-2.jpg" alt="...">
                                        </a>
                                    </li>
                                    <li class="detail-gallery-list-item active">
                                        <a data-target="assets/img/tmp/gallery-3.jpg">
                                            <img src="/assets/img/tmp/gallery-3.jpg" alt="...">
                                        </a>
                                    </li>
                                    <li class="detail-gallery-list-item active">
                                        <a data-target="/assets/img/tmp/gallery-4.jpg">
                                            <img src="/assets/img/tmp/gallery-4.jpg" alt="...">
                                        </a>
                                    </li>
                                    <li class="detail-gallery-list-item active">
                                        <a data-target="/assets/img/tmp/gallery-5.jpg">
                                            <img src="/assets/img/tmp/gallery-5.jpg" alt="...">
                                        </a>
                                    </li>
                                    <li class="detail-gallery-list-item active">
                                        <a data-target="/assets/img/tmp/gallery-6.jpg">
                                            <img src="/assets/img/tmp/gallery-6.jpg" alt="...">
                                        </a>
                                    </li>
                                    <li class="detail-gallery-list-item active">
                                        <a data-target="/assets/img/tmp/gallery-7.jpg">
                                            <img src="/assets/img/tmp/gallery-7.jpg" alt="...">
                                        </a>
                                    </li>
                                    <li class="detail-gallery-list-item active">
                                        <a data-target="/assets/img/tmp/gallery-8.jpg">
                                            <img src="/assets/img/tmp/gallery-8.jpg" alt="...">
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- /.detail-gallery -->

                            <h2>ما اینجا هستیم !</h2>
                            <div class="background-white p20">

                                <!-- Nav tabs -->
                                <ul id="listing-detail-location" class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#simple-map-panel" aria-controls="simple-map-panel" role="tab" data-toggle="tab">
                                            <i class="fa fa-map"></i>Map
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#street-view-panel" aria-controls="street-view-panel" role="tab" data-toggle="tab">
                                            <i class="fa fa-street-view"></i>Street View
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="simple-map-panel">
                                        <div class="detail-map">
                                            <div class="map-position">
                                                <div id="listing-detail-map"
                                                     data-transparent-marker-image="assets/img/transparent-marker-image.png"
                                                     data-styles='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"labels.text.fill","stylers":[{"color":"#b43b3b"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"lightness":"8"},{"color":"#bcbec0"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5b5b5b"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7cb3c9"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#abb9c0"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"color":"#fff1f1"},{"visibility":"off"}]}]'
                                                     data-zoom="15"
                                                     data-latitude="40.779995"
                                                     data-longitude="-73.969133"
                                                     data-icon="fa fa-coffee">
                                                </div><!-- /#map-property -->
                                            </div><!-- /.map-property -->
                                        </div><!-- /.detail-map -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="street-view-panel">
                                        <div id="listing-detail-street-view"
                                             data-latitude="40.758896"
                                             data-longitude="-73.985135"
                                             data-heading="225"
                                             data-pitch="0"
                                             data-zoom="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 id="reviews">نظرات</h2>
                            <div class="reviews">
                                <div class="review">
                                    <div class="review-image">
                                        <img src="assets/img/tmp/agent-1.jpg" alt="">
                                    </div><!-- /.review-image -->

                                    <div class="review-inner">
                                        <div class="review-title">
                                            <h2>اسم ناشناس</h2>

                                            <div class="review-overall-rating">
                                                <span class="overall-rating-title">میزان رای:</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div><!-- /.review-rating -->
                                        </div><!-- /.review-title -->

                                        <div class="review-content-wrapper">
                                            <div class="review-content">
                                                <div class="review-pros">
                                                    <p>ورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>
                                                </div><!-- /.pros -->
                                                <div class="review-cons">
                                                    <p>ورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد</p>
                                                </div><!-- /.cons -->
                                            </div><!-- /.review-content -->

                                            <div class="review-rating">
                                                <dl>
                                                    <dt>کیفیت</dt>
                                                    <dd>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </dd>
                                                    <dt>قیمت</dt>
                                                    <dd>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </dd>
                                                    <dt>زمان بندی</dt>
                                                    <dd>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </dd>
                                                </dl>
                                            </div><!-- /.review-rating -->
                                        </div><!-- /.review-content-wrapper -->

                                    </div><!-- /.review-inner -->
                                </div><!-- /.review -->

                            </div><!-- /.reviews -->

                        </div><!-- /.col-sm-7 -->

                        <div class="col-sm-5">

                            <div class="background-white p20">
                                <div class="detail-overview-hearts">
                                    <i class="fa fa-heart"></i> <strong>213 </strong>دنبال کننده
                                </div>
                                <div class="detail-overview-rating">
                                    <i class="fa fa-star"></i> <strong>4.3 / 5 </strong>از <a href="#reviews">316 رای</a>
                                </div>

                            </div>

                            <h2>درباره آرایشگاه</h2>
                            <div class="background-white p20">
                                <div class="detail-vcard">
                                    <div class="detail-logo">
                                        <img src="/assets/img/tmp/pragmaticmates-logo.png">
                                    </div><!-- /.detail-logo -->

                                    <div class="detail-contact">
                                        <div class="detail-contact-email">
                                            <i class="fa fa-envelope-o"></i> <a href="mailto:#">{{$shop->work_mail}}‌</a>
                                        </div>
                                        <div class="detail-contact-phone">
                                            <i class="fa fa-mobile-phone"></i> <a href="tel:#">{{$shop->cell_phone}}‌</a>
                                        </div>
                                        <div class="detail-contact-website">
                                            <i class="fa fa-globe"></i> <a href="#">{{$shop->website}}‌</a>
                                        </div>
                                        <div class="detail-contact-address">
                                            <i class="fa fa-map-o"></i>
                                            <br>
                                            {{$shop->work_address}}‌
                                        </div>
                                    </div><!-- /.detail-contact -->
                                </div><!-- /.detail-vcard -->

                                <div class="detail-description">
                                    <p>{{$shop->work_desc}}</p>
                                </div>

                                <div class="detail-follow">
                                    <h5>ما را دنبال کنید:</h5>
                                    <div class="follow-wrapper">
                                        <a class="follow-btn facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="follow-btn youtube" href="#"><i class="fa fa-youtube"></i></a>
                                        <a class="follow-btn twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="follow-btn tripadvisor" href="#"><i class="fa fa-tripadvisor"></i></a>
                                        <a class="follow-btn google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div><!-- /.follow-wrapper -->
                                </div><!-- /.detail-follow -->
                            </div>


                        </div><!-- /.col-sm-5 -->

                        <div class="col-sm-12">
                            <h2>نظر بدهید</h2>

                            <form class="background-white p20 add-review" method="post" action="http://preview.byaviators.com/template/superlist/listing-detail.html?">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="">نام <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="" required>
                                    </div><!-- /.col-sm-6 -->

                                    <div class="form-group col-sm-6">
                                        <label for="">ایمیل <span class="required">*</span></label>
                                        <input type="email" class="form-control" id="" required>
                                    </div><!-- /.col-sm-6 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="form-group input-rating col-sm-3 col-sm-offset-3">

                                        <div class="rating-title">زمان بندی</div>

                                        <input type="radio" value="1" name="food" id="rating-food-1">
                                        <label for="rating-food-1"></label>
                                        <input type="radio" value="2" name="food" id="rating-food-2">
                                        <label for="rating-food-2"></label>
                                        <input type="radio" value="3" name="food" id="rating-food-3">
                                        <label for="rating-food-3"></label>
                                        <input type="radio" value="4" name="food" id="rating-food-4">
                                        <label for="rating-food-4"></label>
                                        <input type="radio" value="5" name="food" id="rating-food-5">
                                        <label for="rating-food-5"></label>

                                    </div><!-- /.col-sm-3 -->
                                    <div class="form-group input-rating col-sm-3">

                                        <div class="rating-title">قیمت</div>

                                        <input type="radio" value="1" name="staff" id="rating-staff-1">
                                        <label for="rating-staff-1"></label>
                                        <input type="radio" value="2" name="staff" id="rating-staff-2">
                                        <label for="rating-staff-2"></label>
                                        <input type="radio" value="3" name="staff" id="rating-staff-3">
                                        <label for="rating-staff-3"></label>
                                        <input type="radio" value="4" name="staff" id="rating-staff-4">
                                        <label for="rating-staff-4"></label>
                                        <input type="radio" value="5" name="staff" id="rating-staff-5">
                                        <label for="rating-staff-5"></label>

                                    </div><!-- /.col-sm-3 -->
                                    <div class="form-group input-rating col-sm-3">

                                        <div class="rating-title">کیفیت</div>

                                        <input type="radio" value="1" name="value" id="rating-value-1">
                                        <label for="rating-value-1"></label>
                                        <input type="radio" value="2" name="value" id="rating-value-2">
                                        <label for="rating-value-2"></label>
                                        <input type="radio" value="3" name="value" id="rating-value-3">
                                        <label for="rating-value-3"></label>
                                        <input type="radio" value="4" name="value" id="rating-value-4">
                                        <label for="rating-value-4"></label>
                                        <input type="radio" value="5" name="value" id="rating-value-5">
                                        <label for="rating-value-5"></label>

                                    </div><!-- /.col-sm-3 -->
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="">معایب</label>
                                        <textarea class="form-control" rows="5" id=""></textarea>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="form-group col-sm-6">
                                        <label for="">مزیت</label>
                                        <textarea class="form-control" rows="5" id=""></textarea>
                                    </div><!-- /.col-sm-6 -->

                                    <div class="col-sm-8">
                                        <p><span class="required">*</span> موارد ستاره دار الزامی است</p>
                                    </div><!-- /.col-sm-8 -->
                                    <div class="col-sm-4">
                                        <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-star"></i> ثبت نظر</button>
                                    </div><!-- /.col-sm-4 -->
                                </div><!-- /.row -->
                            </form>
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->

                </div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
@endsection