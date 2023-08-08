@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Slider Bölümü  / Yeni Slider Ekleme Bölümü</h1>
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
        <form action="{{ route('admin.slider.sliderEklepost') }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Başlık</label>
                <input name="slider_baslik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slider Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Üst Başlık</label>
                <input name="slider_altbaslik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slider alt Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Button Linki</label>
                <input name="slider_btn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slider Button link">
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="slider_resim" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Yeni Ekle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush