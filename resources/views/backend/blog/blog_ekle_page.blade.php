@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Blog Konuları  / Yeni Blog Ekleme Bölümü</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.blog') }}">Blog Konularu</a></li>
        <li class="breadcrumb-item active" aria-current="page">Yeni Blog Ekleme</li>
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
        <form action="{{ route('admin.blog.blogeklepost') }}" method="POST" enctype="multipart/form-data">
            @Csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Blog Başlık</label>
                <input name="blog_baslik" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Blog Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Blog İçerik</label>
                <textarea name="blog_icerik" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" name="blog_resim" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Blog Yazarı</label>
                <input name="blog_yazar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Blog Yazarı">
            </div>
            <button type="submit" class="btn btn-primary">Yeni Ekle</button>
        </form>
    </div>

    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush