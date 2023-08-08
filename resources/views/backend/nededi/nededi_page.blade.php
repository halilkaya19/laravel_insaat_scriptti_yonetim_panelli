@extends('backend_layout')

@section('title')

    @endsection

@section('breadcrumbs')
    <h1 class="h3 mb-0 text-gray-800">Nedediler Bölümü Sayfaları</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
        <li class="breadcrumb-item">Nedediler</li>
        <li class="breadcrumb-item active" aria-current="page">Listesi</li>
    </ol>
    @endsection

@section('content')

    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Nedediler Listesi Tablo Listesi</h6>
    </div>
    <div class="table-responsive p-3">
        <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
            <tr>
                <th>Sistem NO</th>
                <th>Kişi Adı</th>
                <th>İşlem</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Sistem NO</th>
                <th>Kişi Adı</th>
                <th>İşlem</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($nededitüm as $keys)
            <tr>
                <td>{{ $keys->id }}</td>
                <td>{{ $keys->kisi_ad }}</td>
                <td>
                    <a href="{{ route("admin.ne.neguncelleget",["id"=>$keys->id]) }}" class="btn btn-info">Düzenle</a>
                    <a href="{{ route('admin.ne.nesil',["id"=>$keys->id]) }}" class="btn btn-danger">Sil</a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    @endsection

@push('customCss')
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @endpush

@push('customJs')
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
    @endpush