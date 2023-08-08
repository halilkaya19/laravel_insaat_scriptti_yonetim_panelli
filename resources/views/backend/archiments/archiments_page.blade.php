@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Site Müşteri Bilgileri  / Güncelleme</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item">Site Müsteri Bilgileri Bölümü</li>
    </ol>
    @endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body">
        <form action="{{ route('admin.arch') }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tamamlanan Proje Sayisi</label>
                <input name="tamamlanan_proje" value="{{ $arc->tamamlanan_proje }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Facebook adresiniz">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Devam Eden Proje Sayisi</label>
                <input name="devameden_proje" value="{{ $arc->devameden_proje }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twitter adresiniz">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Müşteri Sayısı</label>
                <input name="müsteri_say" value="{{ $arc->müsteri_say }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twitter adresiniz">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ekip Sayisi</label>
                <input name="calısanı_proje" value="{{ $arc->calısanı_proje }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="İnstagram">
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush