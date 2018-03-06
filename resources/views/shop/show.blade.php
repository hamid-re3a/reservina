@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-80 mb80">
                    <div class="detail-banner" style="background-image: url('{{url('dist/img/default-banner.jpg')}}');">
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
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="row detail-content">
                        <div class="col-sm-7">

                            <h2>ما اینجا هستیم !</h2>
                            <div class="background-white p20">
                                <div id="map" style="height: 300px"></div>
                            </div>

                        </div>

                        <div class="col-sm-5">
                            <h2>درباره آرایشگاه</h2>
                            <div class="background-white p20">
                                <div class="detail-vcard">
                                    <div class="detail-logo">
                                        <img src="" alt="logo">
                                    </div>

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
                                    </div>
                                </div>

                                @if($shop->work_desc)
                                <div class="detail-description">
                                    <p>{{$shop->work_desc}}</p>
                                </div>
                                @endif

                            </div>

                        </div>

                        <div class="col-sm-12">
                            <h2>پرسنل</h2>
                            <div class="background-white p20">

                                @foreach($shop->personnel as $personnel)
                                    <div class="user user-lg">
                                        <a href="#"><img src="http://server.reservina.ir{{$personnel->profile_pic}}" alt=""></a>
                                        <p style="text-align: center">
                                            <span>{{$personnel->first_name.' '.$personnel->last_name}}</span>
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <h2>خدمات</h2>
                            <div class="background-white p20">
                                @foreach($services as $service)
                                    <form action="" class="form-inline form-services">
                                        <label>{{$service->service_name}}</label>
                                        <div class="form-group">
                                            <select name="personnel_id" class="selectpicker" title="انتخاب آرایشگر">
                                                <option value="{{$service->personnel_id}}">{{$service->personnel_name}}</option>
                                            </select>
                                            <input type="hidden" name="length_time" value="{{$service->length_time}}">
                                        </div>
                                        <div class="form-group">
                                            <label>قیمت : {{$service->service_price}}</label>
                                        </div>
                                        <div class="form-group">
                                            <select name="date" title="انتخاب روز" class="selectpicker" disabled></select>
                                        </div>
                                        <div class="form-group">
                                            <select name="hour" id="hour" title="انتخاب ساعت" class="selectpicker" disabled></select>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> رزرو</button>
                                    </form>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-sm-12">

                            <h2 id="reviews">نظرات</h2>
                            <div class="reviews">
                                <div class="review">
                                    <div class="review-image">
                                        <img src="/assets/img/tmp/agent-1.jpg" alt="">
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
@section('script')
    <script type="text/javascript">

        $('[name="personnel_id"]').on('changed.bs.select',function () {
            getDate($(this).parents('form')[0]);
        });

        $('[name="date"]').on('changed.bs.select',function (e) {
            getHour($(this).parents('form')[0]);
        });

        function getDate(form) {
            var personnel_id = $(form).find('[name="personnel_id"]').val();
            var length_time = $(form).find('[name="length_time"]').val();
            var date = $(form).find('[name="date"]');
            $.getJSON('http://server.reservina.ir/personnel_free_days?personnel_id='+personnel_id+'&time_length='+length_time, function (response) {
                var data = response.data;
                $.each(data, function () {
                    $(form).find('[name="date"]').append('<option value="' + this.date + '">' + this.show_date + '</option>');
                });
                date.removeAttr('disabled');
                date.selectpicker('refresh');
            })
        }

        function getHour(form) {
            var personnel_id = $(form).find('[name="personnel_id"]').val();
            var length_time = $(form).find('[name="length_time"]').val();
            var date = $(form).find('[name="date"]').val();
            var hour = $(form).find('[name="hour"]');
            $.getJSON('http://server.reservina.ir/personnel_free_hours?personnel_id='+personnel_id+'&time_length='+length_time+'&date='+date, function (response) {
                var data = response.data;
                $.each(data, function () {
                    $(form).find('[name="hour"]').append('<option value="' + this.hour + '">' + this.hour + '</option>');
                });
                hour.removeAttr('disabled');
                hour.selectpicker('refresh');
            })
        }

        function initMap() {
            var location = {lat: {{$shop->latitude}}, lng: {{$shop->longitude}}};
            var mapOptions = {
                center: location,
                zoom: 14
            };

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAbXk8V3IyiNjS-vI-pTj3FpNQrw6SuCcM&callback=initMap" type="text/javascript"></script>
@endsection