@extends('layouts.admins')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </nav>
                <div class="container">
                    <div class="mb-3">
                        <label class="form-label">Kode :
                            {{ $data->kode }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Perusahaan :
                            {{ $data->namapt }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat :
                            {{ $data->alamat }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori :
                            {{ $data->kategori }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ruang Lingkup :
                            {{ $data->ruanglingkup }}</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Diterbitkan :
                            {{ $data->diterbitkan }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Berlaku :
                            {{ $data->berlaku }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Berakhir :
                            {{ $data->berakhir }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Survailen Kedua :
                            {{ $data->surpertama }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Survailen Pertama :
                            {{ $data->surkedua }}</label>
                    </div>

                    <a href="/admin/dashboard" class="btn btn-primary">Back</a>


                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                    crossorigin="anonymous">
                </script>
            </div>
        </div>
    </div>
</div>

@endsection