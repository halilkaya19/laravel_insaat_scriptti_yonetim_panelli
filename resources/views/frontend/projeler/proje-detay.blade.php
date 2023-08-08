@extends('frontend_layout')

@section('title')
        Projeler Detay
    @endsection

@section('content')

    <!-- PAGE HEADER -->
    <div class="page_header">
        <div class="page_header_parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Projelerimiz</h3>
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
                            <li>Proje / {{ $proje->proje_baslik }}</li>
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
            <div class="fsidebar fsidebar2" id="floating-sidebar">
                <div class="fs-info">
                    <h3>Proje Detay</h3>
                    <p>{{ $proje->proje_icerik }}</p>
                    <div class="clearfix space20"></div>
                    <ul class="project-meta">
                        <li><i class="icon-file2"></i><span class="project_client">{{ $proje->proje_adres }}</span></li>
                        <li><a href="http://www.themeforest.net/" target="_blank"><i class="icon-link3"></i>http://www.atakmedya.net</a></li>
                    </ul>
                </div>
            </div>
            <div id="fs-content" class="fs-content2">

                <img src="{{ asset("_images/proje/".$proje->proje_resim1) }}" class="img-responsive" alt=""/>
                <div class="clearfix space30"></div>
                @if($proje->proje_resim2)
                <img src="{{ asset("_images/proje/".$proje->proje_resim2) }}" class="img-responsive" alt=""/>
                @endif
                <div class="clearfix space30"></div>
                @if($proje->proje_resim3)
                <img src="{{ asset("_images/proje/".$proje->proje_resim3) }}" class="img-responsive" alt=""/>
                @endif
            </div>
        </div>
    </div>


    @endsection