@extends('frontend_layout')

@section('title')
        Hizmet Detay Sayfası
    @endsection

@section('content')

    <!-- PAGE HEADER -->
    <div class="page_header">
        <div class="page_header_parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>{{ $hizmetdetay->hizmet_baslik }}</h3>
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
                            <li>Hizmetlerimiz</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="inner-content">
        <div class="container">

            <!-- ABOUT -->
            <div class="section-about space100">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <img src="{{ asset("_images/hizmet/".$hizmetdetay->hizmet_resim) }}" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h3>{{ $hizmetdetay->hizmet_baslik }}</h3>
                            <p>{{ $hizmetdetay->hizmet_icerik }}</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="clearfix"></div>

            <!-- INFO / SKILLS -->


            <!-- TESTIMONIALS -->
            <section id="section-testimonials">
                <div class="container">
                    <h2 class="content-head text-center">Testimonials <em>Our industry experts help scale grow and succeed.</em></h2>
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
            </section>

        </div>
    </div>


    <div class="border-top"></div>

    @endsection