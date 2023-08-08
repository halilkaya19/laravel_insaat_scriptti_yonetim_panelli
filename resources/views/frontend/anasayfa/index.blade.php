@extends('frontend_layout')

@section('title')
        anasayfa title
    @endsection

@section('content')
    <div class="slider-wrap">
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <!-- SLIDE  -->
                    @foreach($slider as $key)
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="Ken Burns Slide">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset("frontend/images/dummy.png") }}"  alt="2" data-lazyload="{{ asset("_images/slider/".$key->slider_resim) }}" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption small_text ss-bg-color customin tp-resizeme rs-parallaxlevel-0"
                             data-x="center"
                             data-y="360"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2600"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;   width: 150px !important;
							height: 5px !important;
							background: #8DC73F ;
							">
                            <p class="line white"></p>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption finewide_medium_white lfl tp-resizeme rs-parallaxlevel-0 center-align"
                             data-x="center"
                             data-y="215"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2200"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;  color: #222222;
							text-shadow: none;
							font-size: 60px;
							line-height: 60px;
							font-weight: 900;
							background-color: none;
							text-decoration: none;
							font-family:Open Sans, sans-serif;
							text-transform: uppercase;
							border-width: 0px;
							color: #fff;
							text-align:center;
							border-color: transparent;
							border-style: none;
							letter-spacing: -2px;
							"><span>{{ $key->slider_baslik }}</span>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption small_text lfr tp-resizeme rs-parallaxlevel-0"
                             data-x="center"
                             data-y="385"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="3000"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;  position: absolute;
							color: #222222;
							text-shadow: none;
							font-weight: 400;
							font-size: 14px;
							line-height: 20px;
							margin: 0px;
							border-width: 0px;
							font-family:Open Sans, sans-serif;
							text-transform: uppercase;
							white-space: nowrap;
							color: #fff;
							letter-spacing: 1.8px;
							"><span>{{ $key->slider_altbaslik }}</span>
                        </div>
                        <!-- LAYER NR. 6 -->
                        <a href="{{ $key->slider_btn }}" class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                           data-x="center"
                           data-y="430"
                           data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                           data-speed="500"
                           data-start="3400"
                           data-easing="Power3.easeInOut"
                           data-splitin="none"
                           data-splitout="none"
                           data-elementdelay="0.1"
                           data-endelementdelay="0.1"
                           data-linktoslide="next"
                           style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:18px 28px;
							color: #fff;
							text-transform: uppercase;
							border: none;
							background:#000;
							font-size: 13px;
							letter-spacing: 2px;
							font-family: Montserrat;
							border-radius: 0px;
							display: table;
							transition: .4s;">Detay</a>
                    </li>
                    @endforeach
                    <!-- SLIDE  -->
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </div>

    <div class="inner-content padding70" id="1">

        <div class="container">
            <div class="col-md-8 col-md-offset-2 text-center space50">
                <h2>Firmamızın Hizmetleri</h2>
                <p>Sed dapibus, leo ut placerat bibendum, ligula ligula consectetur eros, sed efficitur justo ex ut risus. Integer nec eros non elit finibus dictum quis sit amet augue.</p>
            </div>
            <div class="ct-info row">
                @foreach($hizmet as $hkey)
                <div class="col-md-4">
                    <img src="{{ asset("_images/hizmet/".$hkey->hizmet_resim) }}" class="img-responsive" alt=""/>
                    <div class="space20"></div>
                    <h4 class="uppercase"><a href="{{ route(".hizmetdetay",["selflink"=>$hkey->hizmet_selflink]) }}">{{ $hkey->hizmet_baslik }}</a></h4>
                    <p>{{ substr($hkey->hizmet_icerik,0,157) }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="space70"></div>

        <div class="parallax-bg5 padding-top-70" id="2">
            <div class="container">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="white">Hizmetlerimizin Hakkında</h2>
                    <p class="white">Sed dapibus, leo ut placerat bibendum, ligula ligula consectetur eros, sed efficitur justo ex ut risus. Integer nec eros non elit finibus dictum quis sit amet augue.</p>
                </div>
                <div class="features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <div class="space30"></div>
                                    <img src="{{ asset("frontend/images/onepage/2/1.png") }}" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fc-main">
                                    <div class="feature-content space50">
                                        <i class="fa fa-hdd-o"></i>
                                        <div class="fc-inner">
                                            <h2 class="white">Profesyonel Ustalar</h2>
                                            <p class="lite-white">Deneyimli ve profesyonel ustalar ile işinizi en hızlı bir şekilde planlı ve programlı olarak yapıyoruz</p>
                                        </div>
                                    </div>
                                    <div class="feature-content space50">
                                        <i class="icon-pencil2"></i>
                                        <div class="fc-inner">
                                            <h2 class="white">Modern İnşaat Ekipmanları</h2>
                                            <p class="lite-white">Morbi vel imperdiet justo, a cursus risus. Sed auctor ullamcorper elit a feugiat. </p>
                                        </div>
                                    </div>
                                    <div class="feature-content space50">
                                        <i class="icon-user"></i>
                                        <div class="fc-inner">
                                            <h2 class="white">Planlama & Uygulama</h2>
                                            <p class="lite-white">Morbi vel imperdiet justo, a cursus risus. Sed auctor ullamcorper elit a feugiat. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container padding80" id="3">
            <section id="portfolio-section">
                <div class="container">
                    <h2 class="uppercase text-center">TÜM<span class="highlight">PROJELERİMİZ</span></h2>
                    <ul class="filter" data-option-key="filter">
                        <li><a class="selected" href="#filter" data-option-value="*">Tümü</a></li>
                        @foreach($projekategori as $prokat)
                            <li><a href="#" data-option-value=".a{{ $prokat->id }}">{{ $prokat->proje_katbaslik }}</a></li>
                        @endforeach
                    </ul>
                    <div id="portfolio-home" class="isotope home-project-3col">
                        @foreach($projelerana as $projeana)
                        <div class="project-item a{{ $projeana->proje_kat_id }}">
                            <div class="project-gal">
                                <img src="{{ asset("_images/proje/".$projeana->proje_resim1) }}" class="img-responsive" alt="">
                                <div class="overlay-folio">
                                    <div class="hover-box">
                                        <div class="hover-zoom">
                                            <a class="mp-lightbox zoom" href="{{ asset("_images/proje/".$projeana->proje_resim1) }}"><i class="icon-plus2"></i></a>
                                            <a class="link" href="project-single.html"><i class="icon-link3"></i></a>
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
                </div>
            </section>
            <div class="clearfix"></div>
        </div>

        <div id="stats2" class="pattern-bg1 no-padding">
            <div class="container">
                <div class="clearfix space80"></div>
                <h2 class="uppercase text-center white">Firma <span class="highlight">İstatisliklerimiz</span></h2>
                <div class="clearfix space60"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="stats2-info">
                            <p><span class="count">{{ $arc->tamamlanan_proje }}</span></p>
                            <h2 class="highlight">Tamamlanan Projelerimiz</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats2-info">
                            <p><span class="count">{{ $arc->devameden_proje }}</span></p>
                            <h2 class="highlight">Devam Eden</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats2-info">
                            <p><span class="count">{{ $arc->müsteri_say }}</span></p>
                            <h2 class="highlight">Müşteri Sayımız</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats2-info">
                            <p><span class="count">{{ $arc->calısanı_proje }}</span></p>
                            <h2 class="highlight">Çalışan Sayımız</h2>
                        </div>
                    </div>
                </div>
                <div class="clearfix space80"></div>
            </div>
        </div>
        <div class="space60"></div>

        <div class="container padding30" id="4">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="uppercase text-center space30">Nedediler BÖlümü?</h4>
                    <div class="testimonial-box">
                        <div id="testimonial" class="owl-carousel">
                            @foreach($nedediler as $nkey)
                            <div class="quote-info">
                                <img src="{{ asset("frontend/images/quote/1.jpg") }}" class="img-responsive" alt="">
                                <p>{{ $nkey->icerik }}</p>
                                <h2>{{ $nkey->kisi_ad }}</h2>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="uppercase space30">Sık Sorulan Sorular</h4>
                    <div class="panel-group" id="accordion-e1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1" href="#collapseOne">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit
                                        <span class="fa fa-chevron-down"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <p>Nam ullamcorper imperdiet luctus. Vestibulum tincidunt malesuada mi, in posuere augue cursus nec. Morbi et vehicula risus, fermentum lacinia justo. Etiam tellus arcu, eleifend tristique enim rutrum iaculis risus, id tincidunt dui fringilla.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space30"></div>

        <div class="border-top">
            <div class="space80"></div>
            <div class="clients container">
                <div id="carousel_five" class="owl-carousel">
                    @foreach($ref as $rkey)
                    <div class="item client-logo">
                        <a href="#"><img src="{{ asset("_images/referans/".$rkey->referans_resim) }}" class="img-responsive" alt=""/></a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>

    <div class="border-top"></div>

    @endsection