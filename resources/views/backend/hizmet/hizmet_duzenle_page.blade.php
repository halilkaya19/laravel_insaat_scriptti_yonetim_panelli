@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Hizmetlerimiz  / Hizmet {{ $hizmetcek->hizmet_baslik }} Düzenleme Bölümü</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.hizmet') }}">Hizmetlerimiz</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hizmet Düzenleme</li>
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
        <form action="{{ route('admin.hizmet.hizmetgncpost',["id"=>$hizmetcek->id]) }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Hizmet Başlık</label>
                <input name="hizmet_baslik" value="{{ $hizmetcek->hizmet_baslik }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hizmet Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hizmet İçerik</label>
                <textarea name="hizmet_icerik" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $hizmetcek->hizmet_icerik }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hizmet Yüklenen Resim</label><br>
                <img src="{{ asset("_images/hizmet/".$hizmetcek->hizmet_resim) }}">
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="hizmet_resim" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <input type="hidden" name="eresim" value="{{ $hizmetcek->hizmet_resim }}">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush