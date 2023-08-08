@extends('frontend_layout')

@section('title')
        Projeler Listesi
    @endsection

@section('content')

    <!-- PAGE HEADER -->
    <div class="page_header">
        <div class="page_header_parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Tüm Projelerimiz</h3>
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
                            <li>Projelerimiz</li>
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
            <section id="portfolio-section">
                <ul class="filter no-margin-top" data-option-key="filter">
                    <li><a class="selected" href="#filter" data-option-value="*">All</a></li>
                    @foreach($projekategori as $prokat)
                        <li><a href="#" data-option-value=".a{{ $prokat->id }}">{{ $prokat->proje_katbaslik }}</a></li>
                    @endforeach
                </ul>
                <div id="portfolio-home" class="isotope tiles folio-boxed-2col">

                    @foreach($projelerana as $projeana)
                        <div class="project-item a{{ $projeana->proje_kat_id }}">
                            <div class="project-gal">
                                <img src="{{ asset("_images/proje/".$projeana->proje_resim1) }}" class="img-responsive" alt="">
                                <div class="overlay-folio">
                                    <div class="hover-box">
                                        <div class="hover-zoom">
                                            <a class="mp-lightbox zoom" href="{{ asset("_images/proje/".$projeana->proje_resim1) }}"><i class="icon-plus2"></i></a>
                                            <a class="link" href="{{ route(".projedetay",["selflink"=>$projeana->proje_selflink]) }}"><i class="icon-link3"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-info">
                                <h2>{{ $projeana->proje_baslik }}</h2>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>
        </div>

    </div>

    @endsection