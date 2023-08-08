@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">İletişim Bilgileri  / Güncelleme</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item">İletisim Bölümü</li>
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
        <form action="{{ route('admin.iletisim') }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail Adresiniz</label>
                <input name="email" value="{{ $iletisimbilgi->email }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail adresiniz">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefon Adresiniz</label>
                <input name="phone" value="{{ $iletisimbilgi->phone }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adres</label>
                <textarea name="adres" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $iletisimbilgi->adres }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush