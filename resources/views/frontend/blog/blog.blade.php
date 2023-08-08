@extends('frontend_layout')

@section('title')
        Blog Sayfası
    @endsection

@section('content')

    <!-- PAGE HEADER -->
    <div class="page_header">
        <div class="page_header_parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Tüm Bloglarımız</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="bcrumbs">
                            <li><a href="{{ route(".homepage") }}"><i class="fa fa-home"></i>Anasayfa</a></li>
                            <li>Blog Listesi</li>
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
                <div class="col-md-12 blog-content">
                    <div class="row">
                        @foreach($blog as $blogkey)
                        <div class="col-md-6 space60">
                            <article class="blogpost">
                                <h2 class="post-title-small"><a href="#">{{ $blogkey->blog_baslik }}</a></h2>
                                <div class="post-meta">
                                    <span><a href="#"><i class="icon-clock2"></i> {{date('d/m/Y', strtotime($blogkey->created_at))}} </a></span>
                                    <span><a href="#"><i class="icon-user"></i>Yönetici</a></span>
                                </div>
                                <div class="space30"></div>
                                <div class="post-media">
                                    <img src="{{ asset("_images/blog/".$blogkey->blog_resim) }}" class="img-responsive" alt="">
                                </div>
                                <div class="space20"></div>
                                <div class="post-excerpt">
                                    <p>{{ substr($blogkey->blog_icerik,0,150) }}</p>
                                </div>
                                <a href="{{ route(".blogdetay",["id"=>$blogkey->blog_selflink]) }}" class="button btn-xs">Devamı...&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
                            </article>
                        </div>
                        @endforeach
                    </div>

                    <div class="space50"></div>
                    <!-- Pagination -->
                    <div class="page_nav">
                        <a href=""><i class="fa fa-angle-left"></i></a>
                        <a href="" class="active">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a class="no-active">...</a>
                        <a href="">9</a>
                        <a href=""><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Content -->
            </div>
        </div>
    </div>
    @endsection