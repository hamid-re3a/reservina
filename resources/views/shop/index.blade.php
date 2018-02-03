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

                            @foreach($shops->data as $shop)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="card-simple" data-background-image="{{$shop->cover_pic ? 'http://server.reservina.ir'.$shop->cover_pic : 'assets/img/tmp/product-1.jpg'}}">
                                    <div class="card-simple-background">
                                        <div class="card-simple-content">
                                            <h2><a href="{{url('shop/'.$shop->id)}}">{{$shop->alias}}</a></h2>
                                            <div class="card-simple-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.card-rating -->

                                            <div class="card-simple-actions">
                                                <a href="#" class="fa fa-star-o"></a>
                                                <a href="{{url('shop/'.$shop->id)}}" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                            </div><!-- /.card-simple-actions -->
                                        </div><!-- /.card-simple-content -->

                                        <div class="card-simple-label">مردانه</div>

                                    </div><!-- /.card-simple-background -->
                                </div><!-- /.card-simple -->
                            </div><!-- /.col-* -->
                            @endforeach

                        </div><!-- /.row -->
                    </div><!-- /.cards-simple-wrapper -->


                    <div class="pager">
                        <ul>
                            @if($shops->prev_page_url)
                            <li><a href="#">قبلی</a></li>
                            <li><a href="#">{{$shops->current_page-1}}</a></li>
                            @endif
                            <li class="active"><a>{{$shops->current_page}}</a></li>
                            <li><a href="#">{{$shops->current_page+1}}</a></li>
                            @if($shops->next_page_url)
                            <li><a href="#">بعدی</a></li>
                            @endif
                        </ul>
                    </div><!-- /.pagination -->


                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
@endsection