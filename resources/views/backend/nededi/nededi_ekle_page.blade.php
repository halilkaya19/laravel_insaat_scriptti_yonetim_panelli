@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Nediler Bölümü  / Yeni Hizmet Ekleme Bölümü</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.ne') }}">Nedediler Bölümü</a></li>
        <li class="breadcrumb-item active" aria-current="page">Yeni Nedediler Görüşü Ekleme</li>
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
        <form action="{{ route('admin.ne.nededieklepost') }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Kişi Adı</label>
                <input name="kisi_ad" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nedediler Kişi">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">İçerik</label>
                <textarea name="icerik" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Yeni Ekle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush