@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Yönetim Paneli Anasayfa</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route("admin") }}">Anasayfa</a></li>
    </ol>
    @endsection

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Toplam Referans</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $toplamrefsay }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span>referans</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Slider Sayisi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $slidersay }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span>Slider bölümü</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Blog Sayisi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $blog }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span>Toplam Blog Sayisi</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Hizmet Sayisi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hizmet }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span>Tüm Hizmetleriniz sayisi</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-7 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Son eklenen Projeler</h6>
                        <a class="m-0 float-right btn btn-danger btn-sm" href="{{ route("admin.proje") }}">Tüm Projeler<i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th>Proje ID</th>
                                <th>Proje Başlık</th>
                                <th>Proje Resim</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projeler as $key)
                            <tr>
                                <td><a href="#">{{ $key->id }}</a></td>
                                <td>{{ $key->proje_baslik }}</td>
                                <td><img width="80" height="74" src="{{ asset('_images/proje/'.$key->proje_resim1) }}"/></td>
                            </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>

        </div>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush