@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">

                    <div class="document-title">
                        <h1>جستجوی پیشرفته</h1>
                    </div><!-- /.document-title -->



                    <form class="filter" method="post" action="http://preview.byaviators.com/template/superlist/listing-grid.html?">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="خدمت آرایشگری" class="form-control">
                                </div><!-- /.form-group -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <select class="form-control" title="نوع آرایشگاه">
                                        <option>Bronx</option>
                                        <option>Brooklyn</option>
                                        <option>Manhattan</option>
                                        <option>Staten Island</option>
                                        <option>Queens</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <select class="form-control" title="انتخاب استان">
                                        <option value="">Automotive</option>
                                        <option value="">Jobs</option>
                                        <option value="">Nightlife</option>
                                        <option value="">Services</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-* -->
                        </div><!-- /.row -->
                    </form>


                    

                    <div class="cards-simple-wrapper">
                        <div class="row">

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-1.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Trip To Paris, France</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Vacation</div>

                                        <div class="card-simple-price">$100 / night</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-2.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Tasty Brazil Coffee</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Coffee</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-3.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Healthy Breakfast</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Food</div>

                                        <div class="card-simple-price">$12 / person</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-4.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Coffee &amp; Newspaper</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Restaurant</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-5.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Boat Trip</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Vacation</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-6.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Italian Restaurant</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Restaurant</div>

                                        <div class="card-simple-price">$28 / person</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-7.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Best Brazil Coffee</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Pub</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-8.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Retro Shop</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Shop</div>

                                        <div class="card-simple-price">$3 / cup</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-9.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Wine Tasting</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Event</div>

                                        <div class="card-simple-price">$13 / ticket</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-10.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Affordable Office</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Coworking</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-11.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Quick Breakfast</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Food</div>

                                        <div class="card-simple-price">$8 / person</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="assets/img/tmp/product-12.jpg">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop')}}">Monumental City</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop')}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">Landmark</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->

                        </div><!-- /.row -->
                    </div><!-- /.cards-simple-wrapper -->


                    <div class="pager">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">5</a></li>
                            <li class="active"><a>6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div><!-- /.pagination -->


                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
@endsection