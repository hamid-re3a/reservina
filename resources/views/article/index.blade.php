@extends('layouts.app')
@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-lg-3">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widgettitle">برچسب ها</h2>

                                <div class="background-white p20">
                                    <ul>
                                        @foreach($tags as $tag)
                                        <li class="tag"><a href="#">{{$tag->tag_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div><!-- /.widget -->

                            <div class="widget">
                                <h2 class="widgettitle">مطالب دیگر</h2>

                                <div class="cards-small">
                                    <div class="card-small">
                                        <div class="card-small-image">
                                            <a href="listing-detail.html">
                                                <img src="assets/img/tmp/product-2.jpg" alt="Tasty Brazil Coffee">
                                            </a>
                                        </div><!-- /.card-small-image -->

                                        <div class="card-small-content">
                                            <h3><a href="listing-detail.html">لورم ایسام</a></h3>
                                            <h4><a href="listing-detail.html">July 30, 2013</a></h4>
                                        </div><!-- /.card-small-content -->
                                    </div><!-- /.card-small -->
                                </div><!-- /.cards-small -->

                            </div><!-- /.widget -->

                        </div><!-- /.sidebar -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <div class="page-title">
                                <h1>وبلاگ رزوینا</h1>
                            </div><!-- /.page-title -->

                            <div class="posts">

                                @foreach($articles->data as $article)
                                <div class="post">
                                    <div class="post-image">
                                        <img src="http://server.reservina.ir{{$article->image}}" alt="A Clockwork Origin">
                                        <a class="read-more" href="{{url('blog/post/'.$article->id)}}">نمایش</a>
                                    </div><!-- /.post-image -->

                                    <div class="post-content">
                                        <h2><a href="{{url('blog/post/'.$article->id)}}">{{$article->title}}</a></h2>
                                        <p>{{str_limit(preg_replace('/\s+/', ' ', strip_tags($article->fulltext)),300)}}</p>
                                    </div><!-- /.post-content -->

                                    <div class="post-meta clearfix">
                                        <div class="post-meta-date">{{$article->published_at}}</div><!-- /.post-meta-date -->
                                        <div class="post-meta-categories"><i class="fa fa-tags"></i> <a href="{{url('blog-detail')}}">رستوران</a></div><!-- /.post-meta-categories -->
                                        <div class="post-meta-more"><a href="{{url('blog/post/'.$article->id)}}">ادامه مطلب <i class="fa fa-chevron-left"></i></a></div><!-- /.post-meta-more -->
                                    </div><!-- /.post-meta -->
                                </div><!-- /.post -->
                                @endforeach

                            </div><!-- /.posts -->


                            <div class="pager">
                                <ul>
                                    @if($articles->current_page > 1)<li><a href="?page={{$articles->current_page - 1}}">قبلی</a></li>@endif
                                    <li><a href="?page={{$articles->current_page}}">{{$articles->current_page}}</a></li>
                                    @if($articles->current_page < $articles->last_page)<li><a href="?page={{$articles->current_page + 1}}">بعدی</a></li>@endif
                                </ul>
                            </div><!-- /.pagination -->


                        </div><!-- /.content -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
@endsection