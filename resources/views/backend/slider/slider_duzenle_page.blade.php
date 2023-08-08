@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Slider Bölümü  / Slider {{ $slidercek->slider_baslik }} Düzenleme</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.slider') }}">Slider</a></li>
        <li class="breadcrumb-item active" aria-current="page">Yeni Slider Ekleme</li>
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
        <form action="{{ route('admin.slider.sliderguncellepost',["id"=>$slidercek->id]) }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Başlık</label>
                <input name="slider_baslik" value="{{ $slidercek->slider_baslik }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slider Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Üst Başlık</label>
                <input name="slider_altbaslik" value="{{ $slidercek->slider_altbaslik }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slider alt Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Button Linki</label>
                <input name="slider_btn" value="{{ $slidercek->slider_btn }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slider Button link">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Hizmet Yüklenen Resim</label><br>
                <img src="{{ asset("_images/slider/".$slidercek->slider_resim) }}" width="100%" height="100%">
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="slider_resim" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <input type="hidden" name="eresim" value="{{ $slidercek->slider_resim }}">
            <button type="submit" class="btn btn-primary">Yeni Ekle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush