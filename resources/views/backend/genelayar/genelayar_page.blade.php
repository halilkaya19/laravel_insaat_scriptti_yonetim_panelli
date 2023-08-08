@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Genel Ayarlar  / Güncelleme</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item">Genel Ayarlar Bölümü</li>
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
        <form action="{{ route('admin.ayarlar') }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <img src="{{ asset("_images/genel/".$genelayar->site_logo) }}" width="70" height="60">
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="site_logo" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Facebook Adresiniz</label>
                <input name="sosyal_facebook" value="{{ $genelayar->sosyal_facebook }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Facebook adresiniz">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Twitter Adresiniz</label>
                <input name="sosyal_twitter" value="{{ $genelayar->sosyal_twitter }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twitter adresiniz">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Twitter Adresiniz</label>
                <input name="sosyal_twitter" value="{{ $genelayar->sosyal_twitter }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twitter adresiniz">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">İnstagram Adresiniz</label>
                <input name="sosyal_instagram" value="{{ $genelayar->sosyal_instagram }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="İnstagram">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gmail Adresiniz</label>
                <input name="sosyal_gmail" value="{{ $genelayar->sosyal_gmail }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="G-mail adresiniz">
            </div>
            <input type="hidden" name="eresim" value="{{ $genelayar->site_logo }}">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush