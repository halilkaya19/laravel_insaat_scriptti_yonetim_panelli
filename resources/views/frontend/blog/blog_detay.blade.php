@extends('frontend_layout')

@section('title')
    Blog Detay
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <div class="page_header">
        <div class="page_header_parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Blog / {{ $blogdetay->blog_baslik }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="bcrumbs">
                            <li><a href="{{ route(".homepage") }}"><i class="fa fa-home"></i> Anasayfa</a></li>
                            <li><a href="{{ route(".blog") }}">Blog</a></li>
                            <li>{{ $blogdetay->blog_baslik }}</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- INNER CONTENT -->
    <div class="inner-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="blog-single">
                        <article class="blogpost">
                            <h2 class="post-title"><a href="#">{{ $blogdetay->blog_baslik }}</a></h2>
                            <div class="post-meta">
                                <span><a href="#"><i class="icon-clock2"></i> {{ $blogdetay->created_at }}</a></span>
                                <span><a href="#"><i class="icon-user"></i>  {{ $blogdetay->blog_yazar }}</a></span>
                            </div>
                            <div class="space30"></div>
                            <!-- Media Gallery -->
                            <div class="post-media">
                                <div id="blog-slider" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="{{ asset("_images/blog/".$blogdetay->blog_resim) }}" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="space30"></div>
                            <p>
                                {{ $blogdetay->blog_icerik }}
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection