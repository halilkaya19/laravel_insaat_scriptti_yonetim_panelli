@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Projeler Bölümü  / Yeni Proje Ekleme Bölümü</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.proje') }}">Projeler Bölümü</a></li>
        <li class="breadcrumb-item active" aria-current="page">Yeni Proje Ekle</li>
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
        <form action="{{ route('admin.proje.projeeklepost') }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Proje Kategorileri</label>
                <select name="proje_kat_id" class="form-control" id="exampleFormControlSelect1">
                    @foreach($projetak as $key)
                    <option value="{{ $key->id }}">{{ $key->proje_katbaslik }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Proje Başlık</label>
                <input name="proje_baslik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Proje Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Proje İçerik</label>
                <textarea name="proje_icerik" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="proje_resim1" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="proje_resim2" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="proje_resim3" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Proje Adres</label>
                <input name="proje_adres" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Proje Adres">
            </div>
            <button type="submit" class="btn btn-primary">Yeni Ekle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush