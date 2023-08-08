@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Proje Kategorileri Bölümü  / Yeni Proje Kategorisi Ekleme Bölümü</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.proje.projekategorilistesi') }}">Proje Kategorisi Bölümü</a></li>
        <li class="breadcrumb-item active" aria-current="page">Yeni Proje Kategorisi Ekleme</li>
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
        <form action="{{ route('admin.proje.projekategorieklepost') }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Proje Kategori Adı</label>
                <input name="proje_katbaslik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Proje Kategori ismi">
            </div>
            <button type="submit" class="btn btn-primary">Yeni Ekle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush