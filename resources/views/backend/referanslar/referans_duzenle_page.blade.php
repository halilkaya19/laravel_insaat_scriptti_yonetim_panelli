@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Referanslar Bölümü  / {{ $refcek->referans_ad }} Referans Güncelleme Bölümü</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.ref') }}">Referanslar Bölümü</a></li>
        <li class="breadcrumb-item active" aria-current="page">Referans Düzenleme</li>
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
        <form action="{{ route('admin.ref.referansguncellepost',["id"=>$refcek->id]) }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Referans Adı</label>
                <input value="{{ $refcek->referans_ad }}" name="referans_ad" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="referans Kişi">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Hizmet Yüklenen Resim</label><br>
                <img src="{{ asset("_images/referans/".$refcek->referans_resim) }}">
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="referans_resim" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <input type="hidden" name="eresim" value="{{ $refcek->referans_resim }}">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush